<?php

namespace control\speciality;

require_once '../../control/common/CrudControl.php';

use control\common\CrudControl;

class SpecialityControl extends CrudControl {

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
        $this->table = 'appointment_speciality';
        $this->id = 'speciality_id';
    }

    public function insert($data) {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table (speciality_name)VALUES (:nome)");
        $stmt->execute(array(
            ':nome' => $data['nome'],
        ));
    }

    public function edit($data) {
        $stmt = $this->pdo->prepare("UPDATE $this->table SET speciality_name=:nome WHERE speciality_id=:id;");
        $stmt->execute(array(
            ':id' => $data['id'],
            ':nome' => $data['nome']
        ));
    }

    public function delete($data) {
        $stmt = $this->pdo->prepare("DELETE FROM $this->table WHERE speciality_id=:id;");
        $stmt->execute(array(
            ':id' => $data['id']
        ));
    }

}
