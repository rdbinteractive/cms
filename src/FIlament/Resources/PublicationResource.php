<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationResource\Pages;
use App\Filament\Resources\PublicationResource\RelationManagers;
use App\Models\Publication;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use RDBI\CMS\FIlament\Layouts\PublicationLayout\Forms\PublicationEditForm;
use RDBI\CMS\FIlament\Layouts\PublicationLayout\Tables\PublicationIndex;

class PublicationResource extends Resource
{
    protected static ?string $model = Publication::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return PublicationEditForm::make($form);
    }

    public static function table(Table $table): Table
    {
        return PublicationIndex::make($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPublications::route('/'),
            'create' => Pages\CreatePublication::route('/create'),
            'edit' => Pages\EditPublication::route('/{record}/edit'),
        ];
    }
}
