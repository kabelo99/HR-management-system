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
		$SURNAME = $_POST["SURNAME"];
		$NAMES = $_POST["NAMES"];
		$GENDER = $_POST["GENDER"];
		$DOB = $_POST["DOB"];
		$CITIZENSHIP = $_POST["CITIZENSHIP"];
		$NATIONALITY = $_POST["NATIONALITY"];
		$NID_NUMBER = $_POST["NID_NUMBER"];
		$HOME_ADDRESS = $_POST["HOME_ADDRESS"];
		$MOBILE_NO = $_POST["MOBILE_NO"];
	 
	// Performing insert query execution
	// here our table name is spouse_details
	$sql = "INSERT INTO SPOUCE_DETAILS (FORCE_NO,SURNAME,NAMES,GENDER,DOB,CITIZENSHIP,NATIONALITY,NID_NUMBER,HOME_ADDRESS,MOBILE_NO,
	         ) VALUES
			('".$FORCE_NO."','".$SURNAME."','".$NAMES."','".$GENDER."','".$DOB."','".$CITIZENSHIP."',
			'".$NATIONALITY."','".$NID_NUMBER."','".$HOME_ADDRESS."','".$MOBILE_NO."')";
	 
	if(mysqli_query($conn, $sql)){
		echo "<h3>data stored in a database successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
			
			header("location:QUALIFICATIONS.html");

	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn);
?>