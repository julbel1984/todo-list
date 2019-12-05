<?php

namespace Todo\Database;

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
     * Показывает все записи с параметрами
     *
     * @param $table
     * @param array $params
     * @return mixed
     */
    public function selectAll($table, $params = [])
    {
        $statment = $this->pdo->prepare($table);

        foreach ($params as $key => $value) {
            $statment->bindParam($key, $value);
        }

        $statment->execute();

        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    //insert TODO

}
