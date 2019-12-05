<?php


namespace Core;

use Exception;

abstract class Controller
{
    public function __call($name, $arguments)
    {
        throw new Exception("Экшен $name не существует", 404);
    }
}