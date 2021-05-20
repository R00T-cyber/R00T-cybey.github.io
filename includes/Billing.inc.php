<?php

if (isset($_POST["submit"]))
{
	$BillFirst = $_POST["BillFirst"];
	$BillLast = $_POST["BillLast"];
	$AddressLine1 = $_POST["AddressLine1"];
	$AddressLine2 = $_POST["AddressLine2"];
	$City =$_POST["City"];
	$Provinces = $_POST["Provinces"];
	$ZipCode = $_POST["ZipCode"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if (emptyInputBilling($BillFirst, $BillLast, $AddressLine1, $AddressLine2, $City, $Provinces, $ZipCode) !== false){
		header("location: ../Billing.php?error=emptyinput");
		exit();
	}

}

else {	
	header("location: ../Paymentmethods.php");
	exit();
 }
 