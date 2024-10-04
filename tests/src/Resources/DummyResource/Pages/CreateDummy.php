<?php

namespace CodeWithDennis\SimpleAlert\Tests\Resources\DummyResource\Pages;

use CodeWithDennis\SimpleAlert\Tests\Resources\DummyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDummy extends CreateRecord
{
    protected static string $resource = DummyResource::class;
}
