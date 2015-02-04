<?php

include_once './UserControl.php';

use control\user\UserControl;

$user = new UserControl();

$user->insert($_POST);

header("Location: ../../view/user/UserList.php");