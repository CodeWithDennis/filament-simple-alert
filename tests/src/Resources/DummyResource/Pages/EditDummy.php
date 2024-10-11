<?php

namespace CodeWithDennis\SimpleAlert\Tests\Resources\DummyResource\Pages;

use CodeWithDennis\SimpleAlert\Tests\Resources\DummyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDummy extends EditRecord
{
    protected static string $resource = DummyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
