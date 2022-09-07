<?php

namespace App\Models;

use App\Interfaces\Permissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model implements Permissions
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'permissions';
    protected $fillable = [
        'name', 'label', 'model'
    ];
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @return bool
     */
    public static function syncPermissions(): bool
    {

        $models = self::getModels(app_path() . "/Models", '\App\Models\\');

        $permissions = array();
        foreach ($models as $model) {
            if (method_exists($model, 'modulePermissions')) {
                $modelName = strrev($model);
                $permissions[strrev(substr($modelName, 0, strpos($modelName,  '\\', 0)))] = $model::modulePermissions();
//                $permissions = array_merge($permissions, $model::modulePermissions());
            }
        }

//        $existingPermissions = self::all()->pluck('name')->toArray();
//
//        $permissionsToBeDeleted = array_diff($existingPermissions, $permissions);
//        debug($permissionsToBeDeleted);
//        $permissionsToBeAdded = array_diff($permissions, $existingPermissions);
//
//        if (!empty($permissionsToBeDeleted)) {
//            Permission::whereIn('name', $permissionsToBeDeleted)->delete();
//        }
//
//        foreach ($permissionsToBeAdded as $permission) {
//            Permission::create([
//                'name' => $permission,
//                'label' => ucwords(str_replace("_", " ", $permission)),
//                'model' => ''
//            ]);
//        }
        foreach ($permissions as $model => $modelPermissions) {
            foreach ($modelPermissions as $modelPermission) {
                Permission::create([
                    'name' => $modelPermission,
                    'label' => ucwords(str_replace("_", " ", $modelPermission)),
                    'model' => $model
                ]);
            }
        }
        return true;

    }

    /**
     * @param $path
     * @param $namespace
     * @return array
     */
    private static function getModels($path, $namespace): array
    {
        $models = [];
        $results = scandir($path);

        foreach ($results as $result) {
            if ($result === '.' or $result === '..')
                continue;

            $filename = $path . DIRECTORY_SEPARATOR . $result;
            if (is_dir($filename)) {
                $models = array_merge($models, self::getModels($filename,'\App\Models\\' . $result . '\\'));
            } else {
                $models[] = substr($namespace . $result, 0, -4);
            }
        }

        return $models;
    }


    public static function modulePermissions($middleware = false, $route = null): array
    {

        if ($middleware) {

            switch ($route) {
                case 'manage':
                case 'show':
                    return array('view_permission');
                    break;
                case 'create':
                case 'store':
                    return array('create_permission');
                    break;
                case 'edit':
                case 'update':
                    return array('edit_permission');
                    break;
                case 'delete':
                    return array('delete_permission');
                    break;
                case 'sync':
                    return array('sync_permission');
                    break;
                default:
                    return array();
            }

        }

        /*return array(
            'view_permission',
            'create_permission',
            'edit_permission',
            'sync_permission',
            'delete_permission',
        );*/

        return [];
    }


}
