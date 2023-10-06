<?php

namespace App\Models;

class Post extends Model
{
    public function getAll()
    {
        return $this->findMany("SELECT posts.id, posts.content, posts.created_at, posts.username, categories.title AS category_title FROM posts INNER JOIN categories ON categories.id = posts.category_id");
    }

    public function createPost($data)
    {
        extract($data);
        return $this->insertOne("INSERT INTO posts (id, category_id, username, content, created_at) VALUES (NULL, '$category_id', '$username', '$content', '$created_at')");
    }
}
