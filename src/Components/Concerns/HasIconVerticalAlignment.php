<?php

namespace CodeWithDennis\SimpleAlert\Components\Concerns;

use Closure;

trait HasIconVerticalAlignment
{
    protected Closure|string|null $iconVerticalAlignment = 'center';

    public function iconVerticalAlignment(Closure|string|null $iconVerticalAlignment = 'center'): static
    {
        $this->iconVerticalAlignment = $iconVerticalAlignment;

        return $this;
    }

    public function getIconVerticalAlignment(): ?string
    {
        return $this->evaluate($this->iconVerticalAlignment);
    }
}
