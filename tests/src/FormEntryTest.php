<?php

use CodeWithDennis\SimpleAlert\Tests\Models\Dummy;
use CodeWithDennis\SimpleAlert\Tests\Models\User;
use CodeWithDennis\SimpleAlert\Tests\Resources\DummyResource\Pages\ViewDummy;
use Livewire\Livewire;

beforeEach(function () {
    $this->user = $this->actingAs(User::factory()->create());

    $testable = Livewire::test(ViewDummy::class, [
        'record' => Dummy::factory()->create()->getRouteKey()
    ]);

    $testable->assertOk();

    /** @var ViewDummy $page */
    $page = $testable->instance();

    $entries = collect($page->getInfolist('infolist')->getComponents());

    $this->entries = $entries->mapWithKeys(function ($entry) {
        return [$entry->getName() => $entry];
    });
});

$defaultTitle = null;
$defaultDescription = null;
$defaultIcon = null;
$defaultColor = 'gray';
$defaultLink = null;
$defaultLinkLabel = 'Details';

$title = 'Great News! 👍';
$description = 'It seems like you are doing great!';
$icon = 'heroicon-o-check';
$color = 'success';
$link = 'https://filamentphp.com/docs';
$linkLabel = 'Visit Filament Docs';

it('sets only the title', function (string $method, ?string $value) {
    expect($this->entries['alert_only_title']->{$method}())->toBe($value);
})
->with([
    ['getTitle', $title],
    ['getDescription', $defaultDescription],
    ['getIcon', $defaultIcon],
    ['getColor', $defaultColor]
]);

it('has only the description', function (string $method, ?string $value) {
    expect($this->entries['alert_only_description']->{$method}())->toBe($value);
})
->with([
    ['getTitle', $defaultTitle],
    ['getDescription', $description],
    ['getIcon', $defaultIcon],
    ['getColor', $defaultColor]
]);

it('has title and description', function (string $method, ?string $value) {
    expect($this->entries['alert_title_and_description']->{$method}())->toBe($value);
})
->with([
    ['getTitle', $title],
    ['getDescription', $description],
    ['getIcon', $defaultIcon],
    ['getColor', $defaultColor]
]);

it('has title, description, and icon', function (string $method, ?string $value) {
    expect($this->entries['alert_title_description_icon']->{$method}())->toBe($value);
})
->with([
    ['getTitle', $title],
    ['getDescription', $description],
    ['getIcon', $icon],
    ['getColor', $defaultColor]
]);

it('has title, description, icon, and color', function (string $method, ?string $value) {
    expect($this->entries['alert_title_description_icon_color']->{$method}())->toBe($value);
})
->with([
    ['getTitle', $title],
    ['getDescription', $description],
    ['getIcon', $icon],
    ['getColor', $color]
]);

it('has title and link', function (string $method, ?string $value) {
    expect($this->entries['alert_title_link']->{$method}())->toBe($value);
})
->with([
    ['getTitle', $title],
    ['getDescription', $defaultDescription],
    ['getLink', $link],
    ['getLinkLabel', $defaultLinkLabel]
]);

it('has title, link, and linkLabel', function (string $method, ?string $value) {
    expect($this->entries['alert_title_link_linkLabel']->{$method}())->toBe($value);
})
->with([
    ['getTitle', $title],
    ['getDescription', $defaultDescription],
    ['getLink', $link],
    ['getLinkLabel', $linkLabel]
]);

test('title accepts a closure', function (string $method, ?string $value) {
    expect($this->entries['alert_only_title_closure']->{$method}())->toBe($value);
})
->with([
    ['getTitle', $title],
    ['getDescription', $defaultDescription],
    ['getIcon', $defaultIcon],
    ['getColor', $defaultColor]
]);

test('description accepts a closure', function (string $method, ?string $value) {
    expect($this->entries['alert_only_description_closure']->{$method}())->toBe($value);
})
->with([
    ['getTitle', $defaultTitle],
    ['getDescription', $description],
    ['getIcon', $defaultIcon],
    ['getColor', $defaultColor]
]);

test('icon accepts a closure', function (string $method, ?string $value) {
    expect($this->entries['alert_title_description_icon_closure']->{$method}())->toBe($value);
})
->with([
    ['getTitle', $title],
    ['getDescription', $description],
    ['getIcon', 'heroicon-o-check'],
    ['getColor', $defaultColor]
]);

test('color accepts a closure', function (string $method, ?string $value) {
    expect($this->entries['alert_title_description_icon_color_closure']->{$method}())->toBe($value);
})
->with([
    ['getTitle', $title],
    ['getDescription', $description],
    ['getIcon', $icon],
    ['getColor', $color]
]);

test('link accepts a closure', function (string $method, ?string $value) {
    expect($this->entries['alert_title_link_closure']->{$method}())->toBe($value);
})
->with([
    ['getTitle', $title],
    ['getDescription', $defaultDescription],
    ['getLink', $link],
    ['getLinkLabel', $defaultLinkLabel]
]);

test('color can be set via simple color method', function (string $name, string $color, string $icon) {
    expect($this->entries['alert_simple_'.$name]->getColor())->toBe($color)
        ->and($this->entries['alert_simple_'.$name]->getIcon())->toBe($icon);

})
->with([
    ['name' => 'success','color' => 'success', 'icon' => 'heroicon-s-check-circle'],
    ['name' => 'info','color' => 'info', 'icon' => 'heroicon-s-information-circle'],
    ['name' => 'warning','color' => 'warning', 'icon' => 'heroicon-s-exclamation-triangle'],
    ['name' => 'danger','color' => 'danger', 'icon' => 'heroicon-s-x-circle'],
]);

