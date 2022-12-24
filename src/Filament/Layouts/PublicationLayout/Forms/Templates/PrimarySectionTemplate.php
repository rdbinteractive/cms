<?php

namespace RDBI\CMS\Filament\Layouts\PublicationLayout\Forms\Templates;

use RDBI\CMS\Models\PublicationType;
use Closure;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;

class PrimarySectionTemplate
{
    public static function make(): array
    {
        return [
            Tab::make('Definition')->schema([
                Grid::make(3)
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                TextInput::make('title')
                                    ->reactive()
                                    ->afterStateUpdated(function (Closure $set, $state) {
                                        $set('slug', Str::slug($state));
                                    })
                                    ->required(),
                                TextInput::make('slug')
                                    ->label('URL Slug')
                                    ->required(),
                                Textarea::make('excerpt')
                                    ->required(),
                            ])->columnSpan(2),
                        Grid::make(1)
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('primary')
                                    ->label('Primary Image')
                                    ->collection('pages')
                            ])->columnSpan(1),
                    ]),
            ]),
            Tab::make('Content')->schema([
                Builder::make('page_builder')
                    ->collapsible()
                    ->label('Content')
                    ->createItemButtonLabel('Add Block')
                    ->hidden(fn (Closure $get) => $get('layout') === 'generic')
                    ->blocks([
                        Block::make('heading')
                            ->schema([
                                TextInput::make('content')
                                    ->label('Heading')
                                    ->required(),
                                Select::make('level')
                                    ->options([
                                        'h1' => 'Heading 1',
                                        'h2' => 'Heading 2',
                                        'h3' => 'Heading 3',
                                        'h4' => 'Heading 4',
                                        'h5' => 'Heading 5',
                                        'h6' => 'Heading 6',
                                    ])
                                    ->required(),
                            ]),
                    ])
            ]),
            Tab::make('SEO')->schema([
                TextInput::make('seo_title')
                    ->label('SEO Publication Title')
            ]),
            Tab::make('Globals')->schema([
                Toggle::make('show_global_header')
            ]),
            Tab::make('Scripts, Meta')->schema([
                Repeater::make('scripts_header')->schema([
                    TextInput::make('friendly_label')->label('Friendly Label'),
                    Textarea::make('script')
                ])
                    ->label('Header Scripts')
                    ->createItemButtonLabel('Add Header Script')
            ]),
        ];
    }
}
