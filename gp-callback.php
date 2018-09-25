<?php 	
 	require_once "config.php";

 	if(isset($_GET['code'])){
 		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
 		$_SESSION['access_token'] = $token;
 	}

 	$oAuth = new Google_Service_Oauth2($gClient);

 	$userData = $oAuth->userinfo_v2_me->get();

 	$_SESSION['id'] = $userData['id'];
 	$_SESSION['email'] = $userData['email'];
 	$_SESSION['gender'] = $userData['gender'];
 	$_SESSION['familyName'] = $userData['familyName'];
 	$_SESSION['givenName'] = $userData['givenName'];
 	$_SESSION['picture'] = $userData['picture'];

 	header('Location: index.php');
 	// echo '<pre>';
 	// var_dump($userData);
 	// echo '</pre>';
?>