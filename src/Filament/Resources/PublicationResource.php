<?php

namespace RDBI\CMS\Filament\Resources;

use RDBI\CMS\FIlament\Layouts\PublicationLayout\Forms\PublicationEditForm;
use RDBI\CMS\FIlament\Layouts\PublicationLayout\Tables\PublicationIndex;
use RDBI\CMS\Filament\Resources\PublicationResource\RelationManagers\CategoriesRelationManager;
use RDBI\CMS\Models\Publication;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
            // CategoriesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \RDBI\CMS\Filament\Resources\PublicationResource\Pages\ListPublications::route('/'),
            'create' => \RDBI\CMS\Filament\Resources\PublicationResource\Pages\CreatePublication::route('/create'),
            'edit' => \RDBI\CMS\Filament\Resources\PublicationResource\Pages\EditPublication::route('/{record}/edit'),
        ];
    }
}
