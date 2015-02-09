<?php

include_once './ScheduleControl.php';

use control\schedule\ScheduleControl;

$schedule = new ScheduleControl();

$schedule->insert($_POST);

header("Location: ../../view/schedule/ScheduleList.php");