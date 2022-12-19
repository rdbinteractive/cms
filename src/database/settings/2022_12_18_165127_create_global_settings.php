<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGlobalSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('global.site_name', getenv('APP_NAME') ?? 'Global Site Name');
    }
}
