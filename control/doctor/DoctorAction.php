<?php

include_once './DoctorControl.php';

use control\doctor\DoctorControl;

$doctor = new DoctorControl();
if (isset($_POST['id'])) {
    $doctor->edit($_POST);
} else {
    $doctor->insert($_POST);
}

header("Location: ../../view/doctor/DoctorList.php");
