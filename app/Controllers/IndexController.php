<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Redis;

class IndexController extends Controller
{
    public function index()
    {
        $posts = (new Post)->getAll();
        $categories = (new Category)->getAll();
        $this->render('post/index', ['posts' => $posts, 'categories' => $categories]);
    }

    public function store($data)
    {
        $redis = new Redis();
        $redis->addJobs($data);
        $redis->worker();
        header("Location: /", 301);
    }
}
