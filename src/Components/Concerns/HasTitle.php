<?php

namespace CodeWithDennis\SimpleAlert\Components\Concerns;

use Closure;

trait HasTitle
{
    protected Closure|string|null $title = null;

    public function title(Closure|string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->evaluate($this->title);
    }
}
