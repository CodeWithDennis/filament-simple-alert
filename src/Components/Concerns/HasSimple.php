<?php

namespace CodeWithDennis\SimpleAlert\Components\Concerns;

trait HasSimple
{
    public function danger(): static
    {
        $this->color = 'danger';
        $this->icon = 'heroicon-s-x-circle';

        return $this;
    }

    public function info(): static
    {
        $this->color = 'info';
        $this->icon = 'heroicon-s-information-circle';

        return $this;
    }

    public function success(): static
    {
        $this->color = 'success';
        $this->icon = 'heroicon-s-check-circle';

        return $this;
    }

    public function warning(): static
    {
        $this->color = 'warning';
        $this->icon = 'heroicon-s-exclamation-triangle';

        return $this;
    }
}
