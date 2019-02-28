<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class Slugify extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'slugify';

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
        //
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
