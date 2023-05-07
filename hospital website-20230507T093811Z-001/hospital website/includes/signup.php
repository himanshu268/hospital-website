<?php

if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST['email'];
	$username = $_POST['uid'];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];

	require_once'server.php';
	require_once'function.php';


	if(emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat) !== false){
		header("location: ../SignUP.html?error=emptyinput");
		exit();
	}
	if(invalidUid($username)!==false){
		header("location: ../SignUP.html?error=invaliduid");
		exit();

	}
	if(invalidEmail($email)!==false){
		header("location: ../SignUP.html?error=invalidEmail");
		exit();

	}
	if(pwdMatch($pwd,$pwdRepeat)!==false){
		header("location: ../SignUP.html?error=passworddontmatch");
		exit();

	}
	if(uidExists($conn, $username)!==false){
		header("location: ../SignUP.html?error=usernametaken");
		exit(); 

	}
		createUser($conn,$name,$email,$username,$pwd);

}
else {
	header("location: ../login.php");
};