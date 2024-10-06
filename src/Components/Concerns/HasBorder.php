<?php

namespace CodeWithDennis\SimpleAlert\Components\Concerns;

use Closure;

trait HasBorder
{
    protected Closure|bool $border = false;

    public function border(Closure|bool $condition = false): static
    {
        $this->border = $condition;

        return $this;
    }

    public function getBorder(): bool
    {
        return $this->evaluate($this->border);
    }
}
