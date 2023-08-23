<?php

namespace App\Listeners;

use App\Services\PostNotificationService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Redis;

class RedisListener
{

    protected PostNotificationService $postNotificationService;

    /**
     * Create the event listener.
     */
    public function __construct(PostNotificationService $notificationService)
    {
        $this->postNotificationService = $notificationService;
    }

    /**
     * Handle the event.
     */
    public function handle(): void
    {
        Redis::subscribe([env('SERVICE_NAME')], function ($message) {
            $data = json_decode($message, true);
            $this->postNotificationService->storePost($data);
        });
    }
}
