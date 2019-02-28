<?php

namespace App\Commands;

use Cocur\Slugify\Slugify as SlugService;
use LaravelZero\Framework\Commands\Command;

class Make extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'make {string?}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Make slug of any string';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $slugService = new SlugService();

        if ($string = $this->argument('string')) {
            $this->line($slugService->slugify($string));

            return;
        }

        while (true) {
            $string = $this->ask('Enter string to slugify');

            $this->line($slugService->slugify($string));
        }
    }
}
