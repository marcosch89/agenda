<?php

include_once './SpecialityControl.php';

use control\speciality\SpecialityControl;

$speciality = new SpecialityControl();
if (isset($_POST['id'])) {
    $speciality->edit($_POST);
} else {
    $speciality->insert($_POST);
}

header("Location: ../../view/speciality/SpecialityList.php");