<?php

namespace RDBI\CMS\Filament\Layouts\PublicationLayout\Forms\Templates;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\MultiSelect;

class SecondarySectionTemplate
{
    public static function make(): array
    {
        return [
            Card::make()->schema([
                Toggle::make('is_published')
                    ->label('Published'),
            ]),
            MultiSelect::make('categories')
                ->relationship('categories', 'name')
                ->required(),
        ];
    }
}
