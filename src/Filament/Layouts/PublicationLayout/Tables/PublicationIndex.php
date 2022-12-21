<?php

namespace RDBI\CMS\Filament\Layouts\PublicationLayout\Tables;

use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

class PublicationIndex
{
    public static function make(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make()
            ])
            ->bulkActions([
               DeleteBulkAction::make()
            ]);
    }
}
