<?php

namespace control\doctor;

require_once '../../control/common/CrudControl.php';

use control\common\CrudControl;

class DoctorControl extends CrudControl {

  

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
        $this->table = 'appointment_doctor';
    }

   
}
