<?php

namespace CodeWithDennis\SimpleAlert\Components\Concerns;

use Closure;

trait HasActionVerticalAlignment
{
    protected Closure|string|null $actionsVerticalAlignment = 'center';

    public function actionsVerticalAlignment(Closure|string|null $actionsVerticalAlignment = 'center'): static
    {
        $this->actionsVerticalAlignment = $actionsVerticalAlignment;

        return $this;
    }

    public function getActionsVerticalAlignment(): ?string
    {
        return $this->evaluate($this->actionsVerticalAlignment);
    }
}
