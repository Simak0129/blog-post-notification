<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostNotifications extends Model
{
    public $timestamps = false;

    protected $fillable = ['post_id', 'message'];
}
