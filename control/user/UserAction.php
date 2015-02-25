<?php

include_once './UserControl.php';

use control\user\UserControl;

$user = new UserControl();
if (isset($_POST['id'])) {
    $user->edit($_POST);
} else if($_POST['action'] == 'delete'){
    $user->delete($_POST);
} else {
    $user->insert($_POST);
}

header("Location: ../../view/user/UserList.php");
