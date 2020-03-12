<?php
	require "../class/app.php";
	require "../class/auth.php";
	$auth = new auth();
	$auth->auth_check();
	
?>