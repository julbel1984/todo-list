<?php


namespace Core;

use App\Core\App;
use App\Core\Database\Connection;
use PDO;

abstract class Model
{
    protected $table;
    protected $db;
    public $id;
    public $data = [];

    public function __construct($id = null)
    {
        $this->db = Connection::make(App::get('config')['database']);
        $this->id = $id;

        if ($this->id) $this->setProperties();
    }

    private function setProperties()
    {
        $statment = $this->db->prepare("select * from {$this->table} where id = :id");
        $statment->bindParam(':id', $this->id, PDO::PARAM_INT);
        $statment->execute();

        if (!$this->data = $statment->fetch(PDO::FETCH_ASSOC)) {
            $this->id = null;
            $this->data = [];
        }
    }
}