<?php

include_once './ClientControl.php';

use control\client\ClientControl;

$client = new ClientControl();
if (isset($_POST['id'])) {
    $client->edit($_POST);
} else {
    $client->insert($_POST);
}


header("Location: ../../view/client/ClientList.php");
