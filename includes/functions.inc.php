<?php

function emptyInputSignUp($name, $email, $password, $cpassword){
	$result;

	if (empty($name) || empty($email) || empty($password)||empty($cpassword)) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}


function emptyInputBilling($BillFirst, $BillLast, $AddressLine1, $AddressLine2, $City, $Provinces, $ZipCode){
	$result;

	if (empty($BillFirst) || empty($BillLast) || empty($AddressLine1) || empty($AddressLine2) || empty($City) || empty($Provinces) || empty($ZipCode)) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function invalidname($name){
	$result;

	if (!preg_match("/^[a-zA-Z0-9]*$/",$name)) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}
function invalidEmail($email){
	$result;
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function pwdMatch($password, $cpassword){
	$result;
	
	if ($password !== $cpassword) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}


function nameExist($conn, $name, $email){

$sql = "SELECT * FROM users WHERE usersId = ? OR usersEmail = ?;";
$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: ../SignUp.php?error=stmtfailed");
		exit(); 
	}

	mysqli_stmt_bind_param($stmt,"ss",$name,$email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}

	else{
		$result = false;
		return $result;

	}	
	mysqli_stmt_close($stmt);
}




function createUser($conn, $name, $email, $password){
$sql = "INSERT INTO users (usersName, usersEmail, usersPassword) VALUES(?, ?, ?);";
$stmt =mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: ../SignUp.php?error=stmtfailed");
		exit();
	}
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt,"sss",$name,$email,$hashedPassword);

	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	header("location: ../SignUp.php?error=none");
	exit();
}


function emptyInputSignIn($semail, $spassword){
	$result;

	if (empty($semail) || empty($spassword)) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function SignInUser($conn, $semail, $spassword){
 	$userExist = nameExist($conn, $name , $semail);

 	if ($userExist === false) {
 		header("location: ../SignIn.php?error=Wronglogin");
 		exit();
 	}

 	$passwordHashed = $userExist["usersPassword"];
 	$checkpassword = password_verify($spassword, $passwordHashed);

 	if ($checkpassword === false) {
 		header("location: ../SignIn.php?error=Wronglogin");
 		exit();
 	}
 	else if ($checkpassword === true) {
 		session_start();
 		$_SESSION["userId"] = $userExist["usersId"];
 		$_SESSION["userName"] = $userExist["usersName"];
 		header("location: ../Shop.php");
 		echo"Welcome" + 'usersName';
 		exit();
 	}

 }
