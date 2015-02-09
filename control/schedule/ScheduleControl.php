<?php

namespace control\schedule;

require_once '../../control/common/CrudControl.php';

use control\common\CrudControl;

class ScheduleControl extends CrudControl {

    public function __construct() {
        $this->pdo = new \PDO("pgsql:dbname=appointment; host=localhost", "postgres", "m2smart");
        $this->table = 'appointment_schedule';
    }

    public function insert($data) {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table "
                . "(schedule_client, schedule_doctor, schedule_time)"
                . "VALUES "
                . "(:cliente,:medico,:horario)");
        $stmt->execute(array(
            ':cliente' => $data['cliente'],
            ':medico' => $data['medico'],
            ':horario' => $data['horario'],
        ));
    }

}
