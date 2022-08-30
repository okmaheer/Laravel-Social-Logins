<?php

declare(strict_types=1);

namespace App\Enum;

use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class RoleEnum extends AbstractEnum
{
    public const ROLE_SUPER_ADMIN = 'super-admin';
    public const ROLE_ADMIN = 'admin';
    public const ROLE_ACCOUNTANT = 'accountant';
    public const ROLE_HR_MANAGER = 'hr-manager';
    public const ROLE_DATA_OPERATOR = 'data-entry-operator';


    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [

        ];
    }

    public static function getNotifiers()
    {
        return User::whereHas(
            'roles', function ($q) {
            $q->whereIn('name', [RoleEnum::ROLE_SUPER_ADMIN, RoleEnum::ROLE_ADMIN]);
        })->get();
    }

    public static function check_permission($user, $permission): bool
    {
        $permissions = self::get_query($user);
        $key = CacheEnum::CHECK_PERMISSION."_".$permission;
        return Cache::remember($key, 3600, function () use($key,$permissions,$permission) {
            $permissions = $permissions->where('permissions.name', $permission);
            if ($permissions->exists()) {
                return true;
            } else {
                return false;
            }
        });
    }

    public static function get_role_permission_array(): array
    {
        return Cache::remember(CacheEnum::CURRENT_USER_PERMISSION,3600, function () {
            return self::get_query(Auth::user())->pluck('permissions.name')->toArray();
        });
    }

    public static function get_query($user): Builder
    {
        return DB::table(TableEnum::PERMISSIONS)
            ->join(TableEnum::PERMISSION_ROLE, 'permission_role.permission_id', 'permissions.id')
            ->join(TableEnum::ROLES, 'permission_role.role_id', 'roles.id')
            ->join(TableEnum::ROLE_USER, 'role_user.role_id', 'roles.id')
            ->join(TableEnum::USERS, 'role_user.user_id', 'users.id')
            ->where('users.id', $user->id);
    }

}
