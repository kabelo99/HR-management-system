<?php

	// servername => localhost
	// username => root
	// password => empty
	// database name => human_resource_management_system
	$conn = mysqli_connect("localhost", "root", "", "human_resource_management_system");
	 
	// Check connection
	if($conn === false){
		die("ERROR: Could not connect. "
			. mysqli_connect_error());
	}
	 
		//VARIBALE DECLARATION
		$FORCE_NO = $_POST["FORCE_NO"];
		$COURSES_OR_SEMINARS = $_POST["COURSES_OR_SEMINARS"];
		$INSTITUTION = $_POST["INSTITUTION"];
		$COUNTRY = $_POST["COUNTRY"];
		$DATES = $_POST["DATES"];


	 
	// Performing insert query execution
	// here our table name is TRAINING_DETAILS
	$sql = "INSERT INTO TRAINING_DETAILS (FORCE_NO,COURSES_OR_SEMINARS,INSTITUTION,COUNTRY,DATES) VALUES
			('".$FORCE_NO."','".$COURSES_OR_SEMINARS."','".$INSTITUTION."','".$COUNTRY."','".$DATES."')";
	 
	if(mysqli_query($conn, $sql)){
		echo "<h3>Qualifications' information stored successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
			header("location:NextOfKin.html");
	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn);
?>