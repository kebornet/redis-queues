<?php

namespace App;

use App\Models\Post;

class Redis
{
    protected $redis;

    public function __construct()
    {
        $this->redis = new \Redis();
        $this->redis->connect('redis', 6379);
    }


    public function addJobs($data)
    {
        $this->redis->rpush("post_create", json_encode($data));
    }

    public function worker()
    {
        $data = json_decode($this->redis->lpop("post_create"), true);

        if (!empty($data)) {
            $data['created_at'] = date("Y-m-d");
            (new Post)->createPost($data);
        }
    }
}
