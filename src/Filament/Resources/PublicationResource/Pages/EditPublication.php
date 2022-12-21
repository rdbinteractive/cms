<?php

namespace RDBI\CMS\Filament\Resources\PublicationResource\Pages;

use RDBI\CMS\Filament\Resources\PublicationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublication extends EditRecord
{
    protected static string $resource = PublicationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
