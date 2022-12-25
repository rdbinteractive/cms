<?php

namespace RDBI\CMS\Filament\Resources\FAQResource\Pages;

use RDBI\CMS\Filament\Resources\FAQResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFAQ extends EditRecord
{
    protected static string $resource = FAQResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
