<?php

include_once '../client/ClientControl.php';
include_once '../doctor/DoctorControl.php';

use control\client\ClientControl;
use control\doctor\DoctorControl;

if ($_POST['controler'] == 'cliente') {

    $client = new ClientControl();
    $client->delete($_POST['id']);
} elseif ($_POST['controler'] == 'medico') {
    $doctor = new DoctorControl();
    $doctor->delete($_POST['id']);
}