<?php

namespace Todo\Database;

use PDO;
use PDOException;

/**
 * Class Connection
 * @package Todo\Database
 */
class Connection
{
    /**
     * Подключение к БД
     * 
     * @param array $config
     * @return PDO 
     */
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'].';charset='.$config['charset'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}
