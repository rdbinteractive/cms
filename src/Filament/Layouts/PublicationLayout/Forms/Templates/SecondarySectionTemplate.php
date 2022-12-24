<?php

namespace RDBI\CMS\Filament\Layouts\PublicationLayout\Forms\Templates;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Placeholder;
use RDBI\CMS\Models\Publication;
use RDBI\CMS\Models\PublicationType;

class SecondarySectionTemplate
{
    public static function make(): array
    {
        return [
            Section::make('Status')->schema([
                Toggle::make('is_published')
                    ->label('Published'),
                Placeholder::make('created_at')
                    ->label('Created:')
                    ->content(fn (Publication $record): ?string => $record->created_at),

                Placeholder::make('updated_at')
                    ->label('Updated:')
                    ->content(fn (Publication $record): ?string => $record->updated_at),
            ]),
            Section::make('Associations')->schema([
                Select::make('publication_type_id')
                    ->label('Publication Type')
                    ->options(PublicationType::all()->pluck('name', 'id'))
                    ->reactive(),
                Select::make('categories')
                    ->multiple()
                    ->relationship('categories', 'name')
                    ->required(),
            ]),
        ];
    }
}
