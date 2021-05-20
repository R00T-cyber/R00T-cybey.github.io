<?php 

if (isset($_POST ["submit"]))
{

	$email = $_POST["semail"];
	$password = $_POST["spassword"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if (emptyInputSignIn($email, $password) !== false){
		header("location: ../SignIn.php?error=emptyinput");
		exit();

	}

	SignInUser($conn, $email, $password);
}
else{
	header("location: ../SignIn.php");
	exit();
}
