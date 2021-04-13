<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('611266773253-42n1u4sn1lupghfr0tnlhd9v72k63nhe.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('PPdbQLujeVQD0kcS-S9_rQQM');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/sociallogin/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 