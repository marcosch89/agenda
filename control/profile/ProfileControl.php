<?php

namespace control\profile;

class ProfileControl {

    protected $pdo;

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
    }

    public function getAll() {
        $consulta = $this->pdo->query("SELECT * FROM appointment_profile;");
        return $consulta->fetchAll(\PDO::FETCH_ASSOC);
    }

}
