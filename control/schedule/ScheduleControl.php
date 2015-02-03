<?php

namespace control\schedule;

class ScheduleControl {

    protected $pdo;

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
    }

    public function getAll() {
        $consulta = $this->pdo->query("SELECT * FROM appointment_schedule;");
        return $consulta->fetchAll(\PDO::FETCH_ASSOC);
    }

}
