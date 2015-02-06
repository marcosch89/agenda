<?php

include_once './SpecialityControl.php';

use control\speciality\SpecialityControl;

$speciality = new SpecialityControl();

$speciality->insert($_POST);

header("Location: ../../view/speciality/SpecialityList.php");