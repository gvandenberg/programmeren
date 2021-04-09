<?php

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientID('196070381326-av5ef4q6lpvf8sknj91ifru8p2c6n829.apps.googleusercontent.com');

$google_client->setClientSecret('Jm_KrrwnuRw4kbMbh9LiGnAb');

$google_client->setRedirectUri('http://localhost/programmeren/Backend/PHP/googlelogin/index.php');

$google_client->addScope('email');

$google_client->addScope('profile');

session_start();

?>