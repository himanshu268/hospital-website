<?php

function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat){
 $result;
 if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
 	 $result=true;
 	}	
 	else{
 		 $result=false;
 	}
 	return  $result;
}

function invalidUid($username){
 $result;
 if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
 	 $result=true;
 	}	
 	else{
 		 $result=false;
 	}
 	return  $result;
} 
function invalidEmail($email){
 $result;
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 	 $result=true;
 	}	
 	else{
 		 $result=false;
 	}
 	return  $result;
} 


function pwdMatch($pwd,$pwdRepeat){
 $result;
 if ($pwd !== $pwdRepeat) {
 	 $result=true;
 	}	
 	else{
 		 $result=false;
 	}
 	return  $result;
} 

function uidExists($conn, $username){
	$sql="SELECT * from staff where staffUid = ? OR staffEmail = ?;";
	$stmt= mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: ../SignUP.html?error=stmtfailed");
		exit(); 
	}

	mysqli_stmt_bind_param($stmt,"ss",$username,$email);
	mysqli_stmt_execute($stmt);

	$resultData= mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else{
		$result=false;
		return $result;
	}

	mysqli_stmt_close($stmt);
} 

function createUser($conn,$name,$email,$username,$pwd){
	$sql="insert into staff (staffName, staffEmail, staffUid, staffPwd) values(?,?,?,?);";
	$stmt= mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: ../SignUP.html?error=stmtFailed");
		exit(); 
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt,'ssss',$name,$email,$username,$hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../Login.html?error=you are registered");
	exit();
}

function emptyInputLogin($username,$pwd){
 $result;
 if (empty($username) || empty($pwd)) {
 	 $result=true;
 	}	
 	else{
 		 $result=false;
 	}
 	return  $result;
}

function loginUser($conn,$username,$pwd){
	$uidExists=uidExists($conn, $username,$username);

	if ($uidExists === false) {
		header("location: ../login/Login.php?error=wrongemail");
		exit();
	}

	$pwdHashed=$uidExists["staffPwd"];
	$checkPwd=password_verify($pwd,$pwdHashed);

	if ($checkPwd===false) {
		header("location: ../login/Login.php?error=wrongpassword");
		exit();
	}
	else if ($checkPwd===true) {
		session_start();
		$_SESSION["staffid"]=$uidExists["staffId"];
		$_SESSION["staffuid"]=$uidExists["staffUid"];
		header("location: ../home after login/home after login.html");
		exit();

	}
}


