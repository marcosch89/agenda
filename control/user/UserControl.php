<?php

namespace control\user;

class UserControl {

    protected $pdo;
    protected $table;

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
        $this->table = 'appointment_user';
    }

    public function getAll() {
        $consulta = $this->pdo->query("SELECT * FROM $this->table;");
        return $consulta->fetchAll(\PDO::FETCH_ASSOC);
    }

}
