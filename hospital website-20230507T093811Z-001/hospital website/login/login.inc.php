<?php
if (isset($_POST["submit"])) { 
	
	$username=$_POST["uid"];
	$pwd= $_POST["pwd"];

require_once '../includes/server.php';
require_once '../includes/function.php';
 
 if(emptyInputLogin($username,$pwd) !== false){
		header("location: login.php?error=emptyinput");
		exit();
	}
	loginUser($conn,$username,$pwd);
}
else{
	header("location: ../login.php");
	exit();
}