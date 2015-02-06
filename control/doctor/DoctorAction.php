<?php

include_once './DoctorControl.php';

use control\doctor\DoctorControl;

$doctor = new DoctorControl();

$doctor->insert($_POST);

header("Location: ../../view/doctor/DoctorList.php");