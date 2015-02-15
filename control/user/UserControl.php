<?php

namespace control\user;

require_once '../../control/common/CrudControl.php';

use control\common\CrudControl;

class UserControl extends CrudControl {

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
        $this->table = 'appointment_user';
        $this->id = 'user_id';
    }

    public function insert($data) {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table (user_name, user_profile)VALUES (:nome,:perfil)");
        $stmt->execute(array(
            ':nome' => $data['nome'],
            ':perfil' => $data['perfil']
        ));
    }

    public function edit($data) {

        $stmt = $this->pdo->prepare("UPDATE $this->table SET user_name=:nome,"
                . " user_profile=:perfil WHERE user_id= :id;");
        $stmt->execute(array(
            ':id' => $data['id'],
            ':nome' => $data['nome'],
            ':perfil' => $data['perfil']
        ));
    }

}
