<?php

namespace CodeWithDennis\SimpleAlert\Components\Concerns;

use Closure;
use Illuminate\Contracts\Support\Htmlable;

trait HasIcon
{
    protected string|Htmlable|Closure|null $icon = null;

    public function icon(string|Htmlable|Closure|null $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): string|Htmlable|null
    {
        return $this->evaluate($this->icon);
    }
}
