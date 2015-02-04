<?php

namespace control\client;

require_once '../../control/common/CrudControl.php';

use control\common\CrudControl;

class ClientControl extends CrudControl {

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
        $this->table = 'appointment_client';
    }

    public function insert($data) {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table "
                . "(client_name, client_phone, client_adress, client_state, client_city, client_rg, client_cpf, client_relationship_status, client_email)"
                . "VALUES "
                . "(:nome,:phone,:adress,:state,:city,:rg,:cpf,:relationship_status,:email)");
        $stmt->execute(array(
            ':nome' => $data['nome'],
            ':phone' => $data['telefone'],
            ':adress' => $data['endereco'],
            ':state' => $data['estado'],
            ':city' => $data['cidade'],
            ':rg' => $data['rg'],
            ':cpf' => $data['cpf'],
            ':relationship_status' => $data['estado_civil'],
            ':email' => $data['email']
        ));
    }

}
