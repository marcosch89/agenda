<?php

namespace control\doctor;

class DoctorControl {

    protected $pdo;

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
    }

    public function getAll() {
        $consulta = $this->pdo->query("SELECT * FROM appointment_doctor;");
        return $consulta->fetchAll(\PDO::FETCH_ASSOC);
    }

}