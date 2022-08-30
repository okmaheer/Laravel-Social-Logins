<?php

declare(strict_types=1);

namespace App\Enum;
class TableEnum extends AbstractEnum
{
    public const ROLE_USER = 'role_user';
    public const PERMISSIONS = 'permissions';
    public const PERMISSION_ROLE = 'permission_role';
    public const ROLES = 'roles';
    public const USERS = 'users';


    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [

        ];
    }

}
