<?php

//точка входа
require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\Router;
use App\Core\Request;

/**
 * Отправляем маршруты в маршрутизатор, а затем направляем
 * на контроллеры, связанные с uri на основе метода запроса get, post
 */
Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());