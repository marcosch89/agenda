<?php

include_once './ProfileControl.php';

use control\profile\ProfileControl;

$profile = new ProfileControl();

if (isset($_POST['id'])) {
    $profile->edit($_POST);
} else {
    $profile->insert($_POST);
}

header("Location: ../../view/profile/ProfileList.php");
