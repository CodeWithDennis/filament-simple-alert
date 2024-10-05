<?php

namespace CodeWithDennis\SimpleAlert\Components\Concerns;

use Closure;

trait HasIcon
{
    protected Closure|string|null $icon = null;

    protected Closure|string|null $iconVerticalAlignment = null;

    public function icon(Closure|string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
    }

    public function iconVerticalAlignment(Closure|string $iconVerticalAlignment = 'center'): static
    {
        $this->iconVerticalAlignment = $iconVerticalAlignment;

        return $this;
    }

    public function getIconVerticalAlignment(): ?string
    {
        return $this->evaluate($this->iconVerticalAlignment);
    }
}
