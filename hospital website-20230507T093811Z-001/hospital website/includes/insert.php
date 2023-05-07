<?php

		
		$conn = mysqli_connect("localhost", "root", "", "hospitaldb");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$ID = $_REQUEST['ID'];
		$DOB = $_REQUEST['DOB'];
		$NAME = $_REQUEST['NAME'];
		$CONTACT = $_REQUEST['CONTACT'];
		$EMAIL_ID = $_REQUEST['EMAIL_ID'];
		$PROBLEM = $_REQUEST['PROBLEM'];
		$Gender = $_REQUEST['Gender'];
		$Admitting = $_REQUEST['Admitting'];
		$Discharge = $_REQUEST['Discharge'];
		


		$sql = "INSERT INTO patient VALUES ('$ID',
			'$DOB','$NAME','$CONTACT','$EMAIL_ID','$PROBLEM','$Gender','$Admitting','$Discharge')";
		
		if(mysqli_query($conn, $sql)){
			header("location: ../home after login/home after login.html");
		exit();
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
