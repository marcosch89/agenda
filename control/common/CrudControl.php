<?php

namespace control\common;

abstract class CrudControl {

    protected $pdo;
    protected $table;

    public function getAll() {
        $consulta = $this->pdo->query("SELECT * FROM $this->table;");
        return $consulta->fetchAll(\PDO::FETCH_ASSOC);
    }

}
