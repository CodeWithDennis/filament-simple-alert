<?php

use CodeWithDennis\SimpleAlert\Tests\Resources\DummyResource\Pages\CreateDummy;
use Livewire\Livewire;

$defaultTitle = null;
$defaultDescription = null;
$defaultIcon = null;
$defaultColor = 'gray';
$defaultLink = null;
$defaultLinkLabel = 'Details';

$title = 'Hoorraayy! Your request has been approved! 🎉';
$description = 'Your request has been approved. You can now access the content.';
$icon = 'heroicon-o-check-circle';
$color = 'success';
$link = 'https://filamentphp.com';
$linkLabel = 'Visit Filament';

it('sets only the title', function (string $method, ?string $value) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_only_title', checkFieldUsing:
            fn ($field) => $field->{$method}() === $value
        )
        ->assertOk();
})
->with([
    ['getTitle', $title],
    ['getDescription', $defaultDescription],
    ['getIcon', $defaultIcon],
    ['getColor', $defaultColor]
]);

it('has only the description', function (string $method, ?string $value) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_only_description', checkFieldUsing:
            fn ($field) => $field->{$method}() === $value
        )
        ->assertOk();
})
->with([
    ['getTitle', $defaultTitle],
    ['getDescription', $description],
    ['getIcon', $defaultIcon],
    ['getColor', $defaultColor]
]);

it('has title and description', function (string $method, ?string $value) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_title_and_description', checkFieldUsing:
            fn ($field) => $field->{$method}() === $value
        )
        ->assertOk();
})
->with([
    ['getTitle', $title],
    ['getDescription', $description],
    ['getIcon', $defaultIcon],
    ['getColor', $defaultColor]
]);

it('has title, description, and icon', function (string $method, ?string $value) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_title_description_icon', checkFieldUsing:
            fn ($field) => $field->{$method}() === $value
        )
        ->assertOk();
})
->with([
    ['getTitle', $title],
    ['getDescription', $description],
    ['getIcon', $icon],
    ['getColor', $defaultColor]
]);

it('has title, description, icon, and color', function (string $method, ?string $value) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_title_description_icon_color', checkFieldUsing:
            fn ($field) => $field->{$method}() === $value
        )
        ->assertOk();
})
->with([
    ['getTitle', $title],
    ['getDescription', $description],
    ['getIcon', $icon],
    ['getColor', $color]
]);

it('has title and link', function (string $method, ?string $value) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_title_link', checkFieldUsing:
            fn ($field) => $field->{$method}() === $value
        )
        ->assertOk();
})
->with([
    ['getTitle', $title],
    ['getDescription', $defaultDescription],
    ['getLink', $link],
    ['getLinkLabel', $defaultLinkLabel]
]);

it('has title, link, and linkLabel', function (string $method, ?string $value) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_title_link_linkLabel', checkFieldUsing:
            fn ($field) => $field->{$method}() === $value
        )
        ->assertOk();
})
->with([
    ['getTitle', $title],
    ['getDescription', $defaultDescription],
    ['getLink', $link],
    ['getLinkLabel', $linkLabel]
]);

test('title accepts a closure', function (string $method, ?string $value) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_only_title_closure', checkFieldUsing:
            fn ($field) => $field->{$method}() === $value
        )
        ->assertOk();
})
->with([
    ['getTitle', $title],
    ['getDescription', $defaultDescription],
    ['getIcon', $defaultIcon],
    ['getColor', $defaultColor]
]);

test('description accepts a closure', function (string $method, ?string $value) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_only_description_closure', checkFieldUsing:
            fn ($field) => $field->{$method}() === $value
        )
        ->assertOk();
})
->with([
    ['getTitle', $defaultTitle],
    ['getDescription', $description],
    ['getIcon', $defaultIcon],
    ['getColor', $defaultColor]
]);

test('icon accepts a closure', function (string $method, ?string $value) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_title_description_icon_closure', checkFieldUsing:
            fn ($field) => $field->{$method}() === $value
        )
        ->assertOk();
})
->with([
    ['getTitle', $title],
    ['getDescription', $description],
    ['getIcon', 'heroicon-o-check'],
    ['getColor', $defaultColor]
]);

test('color accepts a closure', function (string $method, ?string $value) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_title_description_icon_color_closure', checkFieldUsing:
            fn ($field) => $field->{$method}() === $value
        )
        ->assertOk();
})
->with([
    ['getTitle', $title],
    ['getDescription', $description],
    ['getIcon', $icon],
    ['getColor', $color]
]);

test('link accepts a closure', function (string $method, ?string $value) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_title_link_closure', checkFieldUsing:
            fn ($field) => $field->{$method}() === $value
        )
        ->assertOk();
})
->with([
    ['getTitle', $title],
    ['getDescription', $defaultDescription],
    ['getLink', $link],
    ['getLinkLabel', $defaultLinkLabel]
]);

test('color can be set via simple color method', function (string $name, string $color, string $icon) {
    Livewire::test(CreateDummy::class)
        ->assertFormFieldExists('alert_simple_' . $name, checkFieldUsing:
            fn ($field) => $field->getColor() === $color
        )
        ->assertFormFieldExists('alert_simple_' . $name, checkFieldUsing:
            fn ($field) => $field->getIcon() === $icon
        )
        ->assertOk();
})
->with([
    ['name' => 'success','color' => 'success', 'icon' => 'heroicon-s-check-circle'],
    ['name' => 'info','color' => 'info', 'icon' => 'heroicon-s-information-circle'],
    ['name' => 'warning','color' => 'warning', 'icon' => 'heroicon-s-exclamation-triangle'],
    ['name' => 'danger','color' => 'danger', 'icon' => 'heroicon-s-x-circle'],
]);
