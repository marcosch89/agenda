<?php

include_once '../client/ClientControl.php';
include_once '../doctor/DoctorControl.php';
include_once '../schedule/ScheduleControl.php';
include_once '../user/UserControl.php';
include_once '../profile/ProfileControl.php';
include_once '../speciality/SpecialityControl.php';

use control\client\ClientControl;
use control\doctor\DoctorControl;
use control\schedule\ScheduleControl;
use control\user\UserControl;
use control\profile\ProfileControl;
use control\speciality\SpecialityControl;

if ($_POST['controler'] == 'cliente') {

    $client = new ClientControl();
    $client->delete($_POST['id']);
} elseif ($_POST['controler'] == 'medico') {
    $doctor = new DoctorControl();
    $doctor->delete($_POST['id']);
} elseif ($_POST['controler'] == 'horario') {
    $schedule = new ScheduleControl();
    $schedule->delete($_POST['id']);
} else if ($_POST['controler'] == 'usuario') {
    $user = new UserControl();
    $user->delete($_POST['id']);
} else if ($_POST['controler'] == 'perfil') {
    $profile = new ProfileControl();
    $profile->delete($_POST['id']);
} else if ($_POST['controler'] == 'especialidade') {
    $speciality = new SpecialityControl();
    $speciality->delete($_POST['id']);
} 