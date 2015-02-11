<?php

namespace control\doctor;

require_once '../../control/common/CrudControl.php';

use control\common\CrudControl;

class DoctorControl extends CrudControl {

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
        $this->table = 'appointment_doctor';
        $this->id = 'doctor_id';
    }

    public function insert($data) {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table "
                . "(doctor_name, doctor_phone, doctor_email, doctor_city, doctor_state, doctor_adress, doctor_rg, doctor_cpf, doctor_speciality)"
                . "VALUES "
                . "(:nome,:phone,:email,:state,:city,:adress,:rg,:cpf,:speciality)");
        $stmt->execute(array(
            ':nome' => $data['nome'],
            ':phone' => $data['telefone'],
            ':email' => $data['email'],
            ':state' => $data['estado'],
            ':city' => $data['cidade'],
            ':adress' => $data['endereco'],
            ':rg' => $data['rg'],
            ':cpf' => $data['cpf'],
            ':speciality' => $data['especialidade']
        ));
    }

    public function edit($data) {
        
        
        $stmt = $this->pdo->prepare("UPDATE $this->table SET doctor_name=:nome, doctor_phone=:phone, doctor_email=:email,"
                . "doctor_state=:state, doctor_city=:city, doctor_adress=:adress, doctor_rg=:rg, doctor_cpf=:cpf, doctor_speciality=:speciality"
                . " WHERE doctor_id= :id;");
        $stmt->execute(array(
            ':id' => $data['id'],
            ':nome' => $data['nome'],
            ':phone' => $data['telefone'],
            ':email' => $data['email'],
            ':state' => $data['estado'],
            ':city' => $data['cidade'],
            ':adress' => $data['endereco'],
            ':rg' => $data['rg'],
            ':cpf' => $data['cpf'],
            ':speciality' => $data['especialidade']
        ));
    }

}
