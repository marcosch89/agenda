<?php

include_once './ScheduleControl.php';

use control\schedule\ScheduleControl;

$schedule = new ScheduleControl();
if (isset($_POST['id'])) {
    $schedule->edit($_POST);
} else {
    $schedule->insert($_POST);
}

header("Location: ../../view/schedule/ScheduleList.php");
