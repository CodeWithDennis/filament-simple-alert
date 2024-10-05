<?php

namespace CodeWithDennis\SimpleAlert\Components\Concerns;

use Closure;

trait HasIcon
{
    protected Closure|string|null $icon = null;

    public function icon(Closure|string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
    }
}
