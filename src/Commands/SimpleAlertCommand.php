<?php

namespace CodeWithDennis\SimpleAlert\Commands;

use Illuminate\Console\Command;

class SimpleAlertCommand extends Command
{
    public $signature = 'filament-simple-alert';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
