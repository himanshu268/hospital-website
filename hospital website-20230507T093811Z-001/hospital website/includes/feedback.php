<?php

		
		$conn = mysqli_connect("localhost", "root", "", "hospitaldb");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$name = $_REQUEST['name'];
		$contact = $_REQUEST['contact'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['message'];
		
		


		$sql = "INSERT INTO feedback VALUES ('$name',
			'$contact','$email','$message')";
		
		if(mysqli_query($conn, $sql)){
			header("location: ../home/home.html?error=Feedbackistaken");
		exit();
				} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
