<?php

namespace control\speciality;

require_once '../../control/common/CrudControl.php';

use control\common\CrudControl;

class SpecialityControl extends CrudControl {

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
        $this->table = 'appointment_speciality';
    }

    public function insert($data) {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table (speciality_name)VALUES (:nome)");
        $stmt->execute(array(
            ':nome' => $data['nome'],
        ));
    }

}
