<?php

namespace control\speciality;

class SpecialityControl {
    protected $pdo;
    protected $table;

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
        $this->table = 'appointment_speciality';
    }

    public function getAll() {
        $consulta = $this->pdo->query("SELECT * FROM $this->table;");
        return $consulta->fetchAll(\PDO::FETCH_ASSOC);
    }
}
