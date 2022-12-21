<?php

namespace RDBI\CMS\Filament\Resources\PublicationTypeResource\Pages;

use App\Filament\Resources\PublicationTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublicationType extends EditRecord
{
    protected static string $resource = PublicationTypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
