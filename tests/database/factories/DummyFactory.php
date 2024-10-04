<?php

namespace CodeWithDennis\SimpleAlert\Tests\Database\Factories;

use CodeWithDennis\SimpleAlert\Tests\Models\Dummy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DummyFactory extends Factory
{
    protected $model = Dummy::class;

    public function definition(): array
    {
        $title = fake()->sentence();

        return [
            'title' => $title,
        ];
    }
}
