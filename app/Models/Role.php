<?php

namespace App\Models;

use App\Interfaces\Permissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model implements Permissions
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'roles';
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];
    protected $fillable = [
        'name',
        'label',
    ];

    /**
     * @return BelongsToMany
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @param $permissionId
     * @return bool
     */
    public function hasPermission($permissionId): bool
    {
        return $this->permissions->contains('id', $permissionId);
    }

    /**
     * @param false $middleware
     * @param null $route
     * @return array|string[]
     */
    public static function modulePermissions($middleware = false, $route = null): array
    {

        if ($middleware) {

            switch ($route) {
                case 'manage':
                case 'show':
                    return array('view_role');
                    break;
                case 'create':
                case 'store':
                    return array('create_role');
                    break;
                case 'edit':
                case 'update':
                    return array('edit_role');
                    break;
                case 'delete':
                    return array('delete_role');
                    break;
                default:
                    return array();
            }

        }

        return array(
            'view_role',
            'create_role',
            'edit_role',
            'delete_role',
        );
    }

}
