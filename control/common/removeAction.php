<?php

include_once '../client/ClientControl.php';

use control\client\ClientControl;

$client = new ClientControl();

if (isset($_POST['id'])) {
    $client->delete($_POST['id']);
}