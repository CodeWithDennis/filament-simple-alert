<?php

namespace CodeWithDennis\SimpleAlert\Tests\Resources\DummyResource\Pages;

use CodeWithDennis\SimpleAlert\Components\Infolists\SimpleAlert;
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
                    ->link('https://filamentphp.com/docs'),

                SimpleAlert::make('alert_title_link_closure')
                    ->title($defaultTitle)
                    ->link(fn () => 'https://filamentphp.com/docs'),

                SimpleAlert::make('alert_title_link_linkLabel')
                    ->title($defaultTitle)
                    ->link('https://filamentphp.com/docs')
                    ->linkLabel('Visit Filament Docs'),

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
            ]);
    }
}
