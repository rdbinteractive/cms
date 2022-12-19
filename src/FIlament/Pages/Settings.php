<?php

namespace RDBI\CMS\FIlament\Pages;

use App\Settings\GlobalSettings;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;

class Settings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = GlobalSettings::class;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('site_name')
                ->label('Site Name')
                ->required(),
        ];
    }
}
