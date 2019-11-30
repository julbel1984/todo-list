<?php

namespace App\Core;

/**
 * Базовый контейнер внедрения зависимостей DI.
 * Действует как место привязки зависимостей, которые
 * были отправлены ему.
 *
 * Class App
 * @package App\Core
 * @author Julia Belashova
 */
class App
{
    /**
     * Массив значений config.php
     *
     * @var array
     */
    protected static $registry = [];

    /**
     * Пара ключ значение
     *
     * @param $key
     * @param $value
     */
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed
     * @throws Exception
     */
    public static function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {
            throw new Exception("Нет {$key} связанных в контейнере");
        }

        return static::$registry[$key];
    }
}