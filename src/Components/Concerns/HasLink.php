<?php

namespace CodeWithDennis\SimpleAlert\Components\Concerns;

use Closure;

trait HasLink
{
    protected Closure|string|null $link = null;

    protected Closure|string $linkLabel = 'Details';

    protected Closure|bool|null $linkBlank = false;

    /**
     * @deprecated Use `actions()` instead.
     */
    public function link(Closure|string $link): static
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @deprecated Use `actions()` instead.
     */
    public function linkLabel(Closure|string $linkLabel): static
    {
        $this->linkLabel = $linkLabel;

        return $this;
    }

    /**
     * @deprecated Use `actions()` instead.
     */
    public function linkBlank(Closure|string $linkBlank): static
    {
        $this->linkBlank = $linkBlank;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->evaluate($this->link);
    }

    public function getLinkLabel(): string
    {
        return $this->evaluate($this->linkLabel);
    }

    public function getLinkBlank(): bool
    {
        return $this->evaluate($this->linkBlank);
    }
}
