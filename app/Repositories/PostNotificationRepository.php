<?php

namespace App\Repositories;

use App\Models\PostNotifications;

class PostNotificationRepository
{

    public function create(array $attributes): PostNotifications
    {
        return PostNotifications::create($attributes);
    }
}
