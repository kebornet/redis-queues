<?php

namespace App\Models;

class Model
{
    private $link;

    public function __construct()
    {
        if (!$this->link) {
            $this->link = mysqli_connect('db', 'root', 'root', 'test_db');
            mysqli_query($this->link, "SET NAMES 'utf8'");
        }
    }

    protected function insertOne($query)
    {
        mysqli_query($this->link, $query);
    }

    protected function findMany($query)
    {
        $result = mysqli_query($this->link, $query);
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

        return $data;
    }
}
