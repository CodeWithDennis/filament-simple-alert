<?php

namespace CodeWithDennis\SimpleAlert\Tests\Resources;

use CodeWithDennis\SimpleAlert\Components\Forms\SimpleAlert;
use CodeWithDennis\SimpleAlert\Tests\Models\Dummy;
use CodeWithDennis\SimpleAlert\Tests\Resources\DummyResource\Pages;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DummyResource extends Resource
{
    protected static ?string $model = Dummy::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $defaultTitle = 'Hoorraayy! Your request has been approved! 🎉';
        $defaultDescription = 'Your request has been approved. You can now access the content.';
        $defaultIcon = 'heroicon-o-check-circle';
        $defaultColor = 'gray';
        $defaultLink = null;
        $defaultLinkLabel = 'Details';

        return $form
            ->schema([
                SimpleAlert::make('alert_only_title')
                    ->title($defaultTitle),

                SimpleAlert::make('alert_only_title_closure')
                    ->title(fn () => $defaultTitle),

                SimpleAlert::make('alert_only_description')
                    ->description($defaultDescription),

                SimpleAlert::make('alert_only_description_closure')
                    ->description(fn () => $defaultDescription),

                SimpleAlert::make('alert_title_and_description')
                    ->title($defaultTitle)
                    ->description($defaultDescription),

                SimpleAlert::make('alert_title_description_icon')
                    ->title($defaultTitle)
                    ->description($defaultDescription)
                    ->icon($defaultIcon),

                SimpleAlert::make('alert_title_description_icon_closure')
                    ->title($defaultTitle)
                    ->description($defaultDescription)
                    ->icon(fn () => 'heroicon-o-check'),

                SimpleAlert::make('alert_title_description_icon_color')
                    ->title($defaultTitle)
                    ->description($defaultDescription)
                    ->icon($defaultIcon)
                    ->color('success'),

                SimpleAlert::make('alert_title_description_icon_color_closure')
                    ->title($defaultTitle)
                    ->description($defaultDescription)
                    ->icon($defaultIcon)
                    ->color(fn () => 'success'),

                SimpleAlert::make('alert_title_link')
                    ->title($defaultTitle)
                    ->link('https://filamentphp.com'),

                SimpleAlert::make('alert_title_link_closure')
                    ->title($defaultTitle)
                    ->link(fn () => 'https://filamentphp.com'),

                SimpleAlert::make('alert_title_link_linkLabel')
                    ->title($defaultTitle)
                    ->link('https://filamentphp.com')
                    ->linkLabel('Visit Filament'),

                SimpleAlert::make('alert_simple_danger')
                    ->title($defaultTitle)
                    ->danger(),

                SimpleAlert::make('alert_simple_info')
                    ->title($defaultTitle)
                    ->info(),

                SimpleAlert::make('alert_simple_success')
                    ->title($defaultTitle)
                    ->success(),

                SimpleAlert::make('alert_simple_warning')
                    ->title($defaultTitle)
                    ->warning(),

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListDummies::route('/'),
            'create' => Pages\CreateDummy::route('/create'),
            'view' => Pages\ViewDummy::route('/{record}'),
            'edit' => Pages\EditDummy::route('/{record}/edit'),
        ];
    }
}
