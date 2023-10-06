<?php

namespace App\Models;

class Category extends Model
{
    public function getAll()
    {
        return $this->findMany("SELECT * FROM categories");
    }
}
