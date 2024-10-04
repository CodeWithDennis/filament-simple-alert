<?php

namespace CodeWithDennis\SimpleAlert\Tests\Resources\DummyResource\Pages;

use CodeWithDennis\SimpleAlert\Tests\Resources\DummyResource;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewDummy extends ViewRecord
{
    protected static string $resource = DummyResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        $defaultTitle = 'Great News! 👍';
        $defaultDescription = 'It seems like you are doing great!';
        $defaultIcon = 'heroicon-o-check';
        $defaultColor = 'gray';
        $defaultLink = null;
        $defaultLinkLabel = 'Details';

        return $infolist
            ->schema([
                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_only_title')
                    ->title($defaultTitle),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_only_title_closure')
                    ->title(fn () => $defaultTitle),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_only_description')
                    ->description($defaultDescription),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_only_description_closure')
                    ->description(fn () => $defaultDescription),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_title_and_description')
                    ->title($defaultTitle)
                    ->description($defaultDescription),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_title_description_icon')
                    ->title($defaultTitle)
                    ->description($defaultDescription)
                    ->icon($defaultIcon),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_title_description_icon_closure')
                    ->title($defaultTitle)
                    ->description($defaultDescription)
                    ->icon(fn () => 'heroicon-o-check'),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_title_description_icon_color')
                    ->title($defaultTitle)
                    ->description($defaultDescription)
                    ->icon($defaultIcon)
                    ->color('success'),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_title_description_icon_color_closure')
                    ->title($defaultTitle)
                    ->description($defaultDescription)
                    ->icon($defaultIcon)
                    ->color(fn () => 'success'),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_title_link')
                    ->title($defaultTitle)
                    ->link('https://filamentphp.com/docs'),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_title_link_closure')
                    ->title($defaultTitle)
                    ->link(fn () => 'https://filamentphp.com/docs'),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_title_link_linkLabel')
                    ->title($defaultTitle)
                    ->link('https://filamentphp.com/docs')
                    ->linkLabel('Visit Filament Doscs'),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_simple_danger')
                    ->title($defaultTitle)
                    ->danger(),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_simple_info')
                    ->title($defaultTitle)
                    ->info(),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_simple_success')
                    ->title($defaultTitle)
                    ->success(),

                \CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert::make('alert_simple_warning')
                    ->title($defaultTitle)
                    ->warning(),
            ]);
    }
}
