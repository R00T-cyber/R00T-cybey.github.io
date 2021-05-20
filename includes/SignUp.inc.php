<?php

if (isset($_POST ["submit"]))
{
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if (emptyInputSignUp($name, $email, $password, $cpassword) !== false) {
		header("location: ../SignUp.php?error=emptyinput");
		exit();

	}
	if (invalidname($name) !== false) {
		header("location: ../SignUp.php?error=invalidUsername");
		exit();
	}

	if (invalidEmail($email) !== false) {
		header("location: ../SignUp.php?error=invalidemail");
		exit();
	}
	if (pwdMatch($password, $cpassword) !== false) {
		header("location: ../SignUp.php?error=passworddontmatch");
		exit();
	}
	if (nameExist($conn, $name, $email) !== false) {
		header("location: ../SignUp.php?error=nametaken");
		exit();
	}
	
	createUser($conn, $name, $email, $password);

}

else {	
	header("location: ../SignUp.php");
	exit();
 }
 