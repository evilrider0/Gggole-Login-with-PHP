<?php
// Start Session
	session_start();

 //Autoload Google SDK 
	require_once 'vendor/autoload.php';

// Create New GP Instance
	$gClient = new Google_Client();

	$gClient->setClientId("ClientID");//391264330504-jhage4ej92r1imoetei6iuehtfa9sm5m.apps.googleusercontent.com
	$gClient->setClientSecret("ClientSecret");//6qiMmQ3EQBzaFohPxEBihEr-

	$gClient->setApplicationName("Google Login With PHP");
	$gClient->setRedirectUri('http://localhost/Google/gp-callback.php');
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
	$loginURL = $gClient->createAuthUrl();

	



 
?>