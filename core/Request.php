<?php

namespace App\Core;

/**
 * Class Request отвечает за выборку о текущем запросе
 * @package App\Core
 * @author Julia Belashova
 */
class Request
{
    /**
     * Возвращает строку запроса
     *
     * @return string
     */
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    /**
     * Метод запроса get, post, put и т.д.
     *
     * @return mixed
     */
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}