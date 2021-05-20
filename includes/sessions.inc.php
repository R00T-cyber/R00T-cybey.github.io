<?php
require 'includes/dbh.inc.php';

session_start();

$user_check = $_SESSION['usersId']; 


$query = "SELECT usersEmail from users where usersId = '$user_check'"; 

$result = $conn->query($query);

if ($result->num_rows!=0){

	$row = $result->fetch_assoc();
	$login_session = $row["usersEmail"];
}
?>