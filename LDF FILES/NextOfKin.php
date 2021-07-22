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
		$TITLE = $_POST["TITLE"];
		$SURNAME = $_POST["SURNAME"];
		$NAMES = $_POST["NAMES"];
		$RELATIONSHIP = $_POST["RELATIONSHIP"];
		$GENDER = $_POST["GENDER"];
		$DOB = $_POST["DOB"];
		$NATIONALITY = $_POST["NATIONALITY"];
		$NID_NUMBER = $_POST["NID_NUMBER"];
		$HOME_ADDRESS = $_POST["HOME_ADDRESS"];
		$HOME_PHONE = $_POST["HOME_PHONE"];
		$MOBILE_PHONE = $_POST["MOBILE_PHONE"];
		$EMAIL = $_POST["EMAIL"];

	 
	// Performing insert query execution
	// here our table name is next_of_kin
	$sql = "INSERT INTO next_of_kin (FORCE_NO,TITLE,SURNAME,NAMES,RELATIONSHIP,GENDER,DOB,NATIONALITY,
			NID_NUMBER,HOME_ADDRESS,HOME_PHONE,MOBILE_PHONE,EMAIL) VALUES
			('".$FORCE_NO."','".$TITLE."','".$SURNAME."','".$NAMES."','".$RELATIONSHIP."','".$GENDER."',
			'".$DOB."','".$NATIONALITY."','".$NID_NUMBER."','".$HOME_ADDRESS."','".$HOME_PHONE."',
			'".$MOBILE_PHONE."','".$EMAIL."')";
	 
	if(mysqli_query($conn, $sql)){
		echo "<h3>Next of kin datails saved successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
			
			header("location:dependents.html");
	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn);
?>