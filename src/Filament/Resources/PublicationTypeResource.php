<?php

namespace RDBI\CMS\Filament\Resources;

use Closure;
use RDBI\CMS\Filament\Resources\PublicationTypeResource\Pages;
use RDBI\CMS\Filament\Resources\PublicationTypeResource\RelationManagers;
use RDBI\CMS\Models\PublicationType;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PublicationTypeResource extends Resource
{
    protected static ?string $model = PublicationType::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->reactive()
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('slug', Str::slug($state));
                    })
                    ->required(),
                TextInput::make('slug')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => \RDBI\CMS\Filament\Resources\PublicationTypeResource\Pages\ListPublicationTypes::route('/'),
            'create' => \RDBI\CMS\Filament\Resources\PublicationTypeResource\Pages\CreatePublicationType::route('/create'),
            'edit' => \RDBI\CMS\Filament\Resources\PublicationTypeResource\Pages\EditPublicationType::route('/{record}/edit'),
        ];
    }
}
