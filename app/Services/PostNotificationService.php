<?php

namespace App\Services;

use App\Models\PostNotifications;
use App\Repositories\PostNotificationRepository;
use Illuminate\Database\Eloquent\Model;

class PostNotificationService
{

    protected PostNotificationRepository $postNotificationRepository;

    public function __construct(PostNotificationRepository $postNotificationRepository)
    {
        $this->postNotificationRepository = $postNotificationRepository;
    }

    public function storePost(array $request) : PostNotifications
    {
        $data = ['post_id' => $request['id'], 'message' => $request['title']];
        $post = $this->postNotificationRepository->create($data);

        return $post;
    }
}
