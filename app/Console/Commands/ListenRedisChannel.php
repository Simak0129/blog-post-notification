<?php

namespace App\Console\Commands;

use App\Listeners\RedisListener;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class ListenRedisChannel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:listen-redis-channel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $listener = app(RedisListener::class);
        $listener->handle();
    }
}
