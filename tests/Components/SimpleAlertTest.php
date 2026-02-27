<?php

use CodeWithDennis\SimpleAlert\Components\SimpleAlert;
use CodeWithDennis\SimpleAlert\Tests\TestCase;
use Filament\Actions\Action;
use Illuminate\Support\Facades\Blade;

uses(TestCase::class);

it('applies the success preset', function (): void {
    $alert = SimpleAlert::make('notice')->success();

    expect($alert->getColor())->toBe('success')
        ->and($alert->getIcon())->toBe('heroicon-s-check-circle');
});

it('registers actions from an array', function (): void {
    $alert = SimpleAlert::make('notice')
        ->actions([
            Action::make('read-more')->label('Read more')->url('https://filamentphp.com'),
        ]);

    $actions = $alert->getActions();

    expect($actions)->toHaveCount(1)
        ->toHaveKey('read-more')
        ->and($actions['read-more']->getSchemaComponent())->toBe($alert);
});

it('renders the anonymous blade component', function (): void {
    $html = Blade::render(<<<'BLADE'
        <x-filament-simple-alert::simple-alert
            title="Status updated"
            description="Everything was saved successfully."
            :border="true"
        />
    BLADE);

    expect($html)->toContain('Status updated')
        ->toContain('Everything was saved successfully.')
        ->toContain('filament-simple-alert')
        ->toContain('ring-1');
});
