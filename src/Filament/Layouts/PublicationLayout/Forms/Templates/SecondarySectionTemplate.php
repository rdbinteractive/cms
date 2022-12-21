<?php

namespace RDBI\CMS\FIlament\Layouts\PublicationLayout\Forms\Templates;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\Toggle;

class SecondarySectionTemplate
{
    public static function make(): array
    {
        return [
            Card::make()->schema([
                Toggle::make('is_published')
                    ->label('Published'),
            ]),
        ];
    }
}
