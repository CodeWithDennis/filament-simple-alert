<?php

namespace CodeWithDennis\SimpleAlert\Components;

use Closure;
use Filament\Infolists\Components\Entry;

class SimpleAlertEntry extends Entry
{
    protected string $view = 'filament-simple-alert::simple-alert-entry';

    protected string $type = 'gray';

    protected Closure|string|null $icon = null;

    protected Closure|string|null $title = null;

    protected Closure|string|null $description = null;

    protected Closure|string|null $link = null;

    protected Closure|string $linkLabel = 'Details';

    protected Closure|bool|null $linkBlank = false;

    protected function setUp(): void
    {
        parent::setUp();

        $this->hiddenLabel();
    }

    public function danger(): static
    {
        $this->type = 'danger';
        $this->icon = 'heroicon-s-x-circle';

        return $this;
    }

    public function info(): static
    {
        $this->type = 'info';
        $this->icon = 'heroicon-s-information-circle';

        return $this;
    }

    public function success(): static
    {
        $this->icon = 'heroicon-s-check-circle';

        return $this;
    }

    public function warning(): static
    {
        $this->type = 'warning';
        $this->icon = 'heroicon-s-exclamation-triangle';

        return $this;
    }

    public function color(Closure|string $color): static
    {
        $this->type = $color;

        return $this;
    }

    public function icon(Closure|string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function link(Closure|string $link): static
    {
        $this->link = $link;

        return $this;
    }

    public function linkLabel(Closure|string $linkLabel): static
    {
        $this->linkLabel = $linkLabel;

        return $this;
    }

    public function linkBlank(Closure|string $linkBlank): static
    {
        $this->linkBlank = $linkBlank;

        return $this;
    }

    public function title(Closure|string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function description(Closure|string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getLink(): ?string
    {
        return $this->evaluate($this->link);
    }

    public function getLinkLabel(): ?string
    {
        return $this->evaluate($this->linkLabel);
    }

    public function getBlank(): bool
    {
        return $this->evaluate($this->linkBlank);
    }

    public function getTitle(): ?string
    {
        return $this->evaluate($this->title);
    }

    public function getDescription(): ?string
    {
        return $this->evaluate($this->description);
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
    }
}
