<?php

namespace RDBI\CMS\Filament\Layouts\BaseLayout;

use Filament\Forms\Components\Grid;


class AdminGrid
{
    public static function make($primary, $secondary): array
    {
        return [
            Grid::make(12)
                ->schema([
                    Grid::make(1)->schema([
                        $primary,
                    ])->columnSpan(9),
                    Grid::make(1)->schema(
                        $secondary
                    )->columnSpan(3),
                ])
        ];
    }
}

