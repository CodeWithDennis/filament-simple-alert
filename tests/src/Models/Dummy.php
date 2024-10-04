<?php

namespace CodeWithDennis\SimpleAlert\Tests\Models;

use CodeWithDennis\SimpleAlert\Tests\Database\Factories\DummyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dummy extends Model
{
    use HasFactory;

    protected static function newFactory(): DummyFactory
    {
        return new DummyFactory;
    }

    protected $guarded = [];
}
