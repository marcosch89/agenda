<?php

namespace control\common;

abstract class CrudControl {

    protected $pdo;
    protected $table;
    protected $id;

    public function getAll() {
        $consulta = $this->pdo->query("SELECT * FROM $this->table;");
        return $consulta->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getOne($data) {
        $stmt = $this->pdo->prepare("select * from $this->table where $this->id = :id");
        $stmt->execute(array(
            ':id' => $data['id']
        ));
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM $this->table WHERE $this->id = :id");
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
    }

}
