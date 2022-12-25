<?php

namespace RDBI\CMS\Filament\Resources\FAQResource\Pages;

use RDBI\CMS\Filament\Resources\FAQResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFAQs extends ListRecords
{
    protected static string $resource = FAQResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
