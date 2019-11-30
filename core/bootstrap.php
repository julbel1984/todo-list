<?php

use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;

/**
 * Создает ключ с именем config, который имеет массив config.php
 * в качестве значения, а затем сохраняет пару ключ-значение
 * в контейнере DI
 */
App::bind('config', require 'config.php');

/**
 * Создает ключ с именем database,
 * значение которого является экземпляром QueryBuilder
 * и сохраняет его в контейнере DI
 */
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

/**
 * Функция для подключения вида
 * принимает коллекцию пар ключ-значние,
 * которые обрабатываем ['name' => 'index']
 * в $name = 'index'
 *
 * @param $name
 * @param array $data
 * @return mixed
 */
function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

/**
 * Редирект в пределах приложения
 *
 * @param $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}