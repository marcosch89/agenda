<?php

namespace control\doctor;

require_once '../../control/common/CrudControl.php';

use control\common\CrudControl;

class DoctorControl extends CrudControl {

  

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
        $this->table = 'appointment_doctor';
    }
    
     public function insert($data) {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table "
                . "(doctor_name, doctor_phone, doctor_email, doctor_city, doctor_state, doctor_adress, doctor_rg, doctor_cpf, doctor_speciality)"
                . "VALUES "
                . "(:nome,:phone,:email,:city,:state,:adress,:rg,:cpf,:speciality)");
        $stmt->execute(array(
            ':nome' => $data['nome'],
            ':phone' => $data['telefone'],
            ':email' => $data['email'],
            ':city' => $data['cidade'],
            ':state' => $data['estado'],
            ':adress' => $data['endereco'],
            ':rg' => $data['rg'],
            ':cpf' => $data['cpf'],
            ':speciality' => $data['especialidade']
        ));
    }

   
}
