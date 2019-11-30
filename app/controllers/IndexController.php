<?php

namespace App\Controllers;

/**
 * Class IndexController
 * @package App\controllers
 * @author Julia Belashova
 */
class IndexController
{
    public function home()
    {
        return view('index');
    }
}