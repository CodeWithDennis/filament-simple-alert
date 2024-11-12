<?php

namespace CodeWithDennis\SimpleAlert\Components\Infolists;

use Closure;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasActionVerticalAlignment;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasBorder;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasColor;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasDescription;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasIcon;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasIconVerticalAlignment;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasLink;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasSimple;
use CodeWithDennis\SimpleAlert\Components\Concerns\HasTitle;
use Filament\Infolists\Components\Entry;

class SimpleAlert extends Entry
{
    use HasActionVerticalAlignment;
    use HasBorder;
    use HasColor;
    use HasDescription;
    use HasIcon;
    use HasIconVerticalAlignment;
    use HasLink;
    use HasSimple;
    use HasTitle;

    protected string $view = 'filament-simple-alert::components.simple-alert-entry';

    public function actions(array|Closure $actions): static
    {
        $this->actions = $actions;

        return $this;
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->hiddenLabel();
    }
}
