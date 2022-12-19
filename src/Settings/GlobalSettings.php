<?php

namespace RDBI\CMS\Settings;

use Spatie\LaravelSettings\Settings;

class GlobalSettings extends Settings
{
    public string $site_name;

    public static function group(): string
    {
        return 'global';
    }
}
