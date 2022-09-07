<?php

namespace App\Models;

use App\Enum\RoleEnum;
use App\Enum\TableEnum;
use App\Traits\hasPermissionsTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'active',
        'avatar',
        'auth_type',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',

    ];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];
    
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class,TableEnum::ROLE_USER);
    }

    public function hasRole($RoleName): bool
    {
        if (is_string($RoleName)) {
            return $this->roles->contains('name', $RoleName);
        }

        return !!$RoleName->intersect($this->roles);
    }

    public function ability($permission_name = null): bool
    {
        return RoleEnum::check_permission($this,$permission_name);
    }

    public function getName(): string
    {
        return $this->name;
    }
    // public static function modulePermissions($middleware = false, $route = null): array
    // {

    //     if ($middleware) {

    //         switch ($route) {
    //             case 'index':
    //             case 'show':
    //                 return array('view_user');
    //                 break;
    //             case 'create':
    //             case 'store':
    //                 return array('create_user');
    //                 break;
    //             case 'edit':
    //             case 'update':
    //                 return array('edit_user');
    //                 break;
    //             case 'delete':
    //                 return array('delete_user');
    //                 break;
    //             default:
    //                 return array();
    //         }

    //     }

    //     return array(
    //         'view_user',
    //         'create_user',
    //         'edit_user',
    //         'delete_user',
    //     );
    // }


}
