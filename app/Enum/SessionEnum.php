<?php

declare(strict_types=1);

namespace App\Enum;

class SessionEnum extends AbstractEnum
{

    public const SESSION_LOCATION_MODEL = 'location_model';
    public const SESSION_FISCAL_YEAR = 'fiscalYear';
    public const SESSION_FISCAL_YEAR_START = 'fiscalYearStart';
    public const SESSION_FISCAL_YEAR_END = 'fiscalYearEnd';

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
