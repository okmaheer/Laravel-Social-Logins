<?php

declare(strict_types=1);

namespace App\Enum;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CacheEnum extends AbstractEnum
{
    public const AUTH_ROLES_PERMISSIONS = 'auth_roles_permissions';
    public const AUTH_LOCATION = 'current_location';

    public const CURRENT_USER_PERMISSION = 'current_user_permissions';
    public const CHECK_PERMISSION = 'check_permission';

    public static function storeLocation($location) {
        /*Cache::remember(CacheEnum::AUTH_LOCATION,'86400', function () use($location){
            return $location;
        });*/
        Cache::forever(CacheEnum::AUTH_LOCATION, $location);
    }

    public static function getValues(): array
    {
        return array(
            self::CURRENT_USER_PERMISSION
        );
    }

    public static function getTranslationKeys(): array
    {
        return [

        ];
    }

}
