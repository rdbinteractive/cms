<?php

namespace RDBI\CMS\Filament\Resources\PublicationResource\Pages;

use RDBI\CMS\Filament\Resources\PublicationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublications extends ListRecords
{
    protected static string $resource = PublicationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
