<?php

namespace App\Filament\Pages;

use RDBI\CMS\Settings\GeneralSettings;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;

class Settings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = GeneralSettings::class;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('site_name')
                ->label('Site Name')
                ->required(),
        ];
    }
}
