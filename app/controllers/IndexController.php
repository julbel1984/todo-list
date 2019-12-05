<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;
use App\Core\App;

/**
 * Class IndexController
 * @package App\controllers
 * @author Julia Belashova
 */
class IndexController extends Controller
{
    public function home($request)
    {
        $data['page'] = $request['page'] ?? 1;
        $data['sort'] = $request['sort'] ?? 1;

        //return view('index');
        View::render('template', ['content' => ['index', $data]]);
    }
}