<?php

namespace control\profile;

require_once '../../control/common/CrudControl.php';

use control\common\CrudControl;


class ProfileControl extends CrudControl{

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
        $this->table = 'appointment_profile';
    }
     public function insert($data) {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table (profile_description)VALUES (:descricao)");
        $stmt->execute(array(
            ':descricao' => $data['descricao'],
        ));
    }

}
