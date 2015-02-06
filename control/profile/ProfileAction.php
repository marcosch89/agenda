<?php

include_once './ProfileControl.php';

use control\profile\ProfileControl;

$profile = new ProfileControl();

$profile->insert($_POST);

header("Location: ../../view/profile/ProfileList.php");