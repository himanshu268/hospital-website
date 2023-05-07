<?php
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
	$uidExists($conn, $username,$username);

	if ($uidExists == false) {
		header("location: ../login/Login.php?error=wrong email")
		
	$pwdHashed=$uidExists["staffPwd"];
	$checkPwd=password_verify($pwd,$pwdHashed);

	if ($checkPwd===false) {
		header("location: ../login/Login.php?error=wrongpassword");
		exit()
	}
	else if ($checkPwd===true) {
		session_start();
		$_SESSION["staffid"]=$uidExists["staffId"];
		$_SESSION["staffuid"]=$uidExists["staffUid"];
		header("location: ../home after login/home after login.html");
		exit()

	}
}