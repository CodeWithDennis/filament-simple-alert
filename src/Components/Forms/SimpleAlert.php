<?php

namespace CodeWithDennis\SimpleAlert\Components\Forms;

use CodeWithDennis\SimpleAlert\Components\Concerns\HasColor;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasDescription;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasIcon;
use CodeWithDennis\SimpleAlert\Components\Concerns\Haslink;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasSimple;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasTitle;
use Filament\Forms\Components\Field;

class SimpleAlert extends Field
{
    use HasColor;
    use HasDescription;
    use HasIcon;
    use Haslink;
    use HasSimple;
    use HasTitle;

    protected string $view = 'filament-simple-alert::components.simple-alert-field';

    protected function setUp(): void
    {
        parent::setUp();

        $this->hiddenLabel();
    }
}
