<?php

namespace Routes;

use Controllers\IndexController;
use Controllers\TaskController;
use Exceptions\BadUrlException;

class Router
{
    public function handle()
    {
        $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
        $path = $uri_parts[0];

        switch($path)
        {
            case "/" :
                $Controller = new IndexController();
                $Controller->show();
                break;
            case "/task" :
                $Controller = new TaskController();
                $Controller->show();
                break;
            default :
                throw new BadUrlException();
                break;
        }
    }
}