<?php

    

include_once './ClientControl.php';

use control\client\ClientControl;

$client = new ClientControl();

$client->insert($_POST);

header("Location: ../../view/client/ClientList.php");