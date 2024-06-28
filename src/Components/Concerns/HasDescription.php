<?php

namespace CodeWithDennis\SimpleAlert\Components\Concerns;

use Closure;

trait HasDescription
{
    protected Closure|string|null $description = null;

    public function description(Closure|string|null $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->evaluate($this->description);
    }
}
