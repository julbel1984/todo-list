<?php

namespace Todo;

use Exception;

/**
 * Базовый контейнер внедрения зависимостей DI.
 * Действует как место привязки зависимостей, которые
 * были отправлены ему.
 *
 * Class App
 * @package Todo
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
        if (array_key_exists($key, static::$registry)) {
            return static::$registry[$key];            
        }

        throw new \Exception("Нет {$key} связанных в контейнере");
    }
}