<?php

		
		$conn = mysqli_connect("localhost", "root", "", "hospitaldb");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$patient = $_REQUEST['patient'];
		$contact = $_REQUEST['contact'];
		$email = $_REQUEST['email'];
		$Address = $_REQUEST['Address'];
		
		


		$sql = "INSERT INTO appointment VALUES ('$patient',
			'$contact','$email','$Address')";
		
		if(mysqli_query($conn, $sql)){
			header("location: ../home/home.html");
		exit();
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
