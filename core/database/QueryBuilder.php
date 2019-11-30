<?php

namespace App\Core\Database;

use PDO;

/**
 * Class QueryBuilder
 * @package App\Core\Database
 * @author Julia Belashova
 */
class QueryBuilder
{
    /**
     * @var PDO
     */
    protected $pdo;

    /**
     * QueryBuilder constructor.
     *
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Показывает все записи
     *
     * @param $table
     * @return array
     */
    public function selectAll($table)
    {
        $statment = $this->pdo->prepare("select * from {$table}");
        $statment->execute();
        return $statment->fetchAll(PDO::FETCH_CLASS);
    }
}
