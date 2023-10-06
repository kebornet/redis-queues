<?php

namespace App;

class Router
{
    public static function get($Controller, $action)
    {
        $controller = new $Controller();
        $controller->$action();
    }

    public static function post($controller, $action, $data)
    {
        $controller = new $controller();
        $controller->$action($data);
    }
}
