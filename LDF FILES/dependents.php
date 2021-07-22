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
		$DOB = $_POST["DOB"];
		$GENDER = $_POST["GENDER"];
		$RELATIONSHIP = $_POST["RELATIONSHIP"];
		$BIRTH_CERTIFICATE_NO = $_POST["BIRTH_CERTIFICATE_NO"];

	 
	// Performing insert query execution
	// here our table name is next_of_kin
	$sql = "INSERT INTO dependents (FORCE_NO,SURNAME,NAMES,DOB,GENDER,RELATIONSHIP,BIRTH_CERTIFICATE_NO) VALUES
			('".$FORCE_NO."','".$SURNAME."','".$NAMES."','".$DOB."','".$GENDER."','".$RELATIONSHIP."',
			'".$BIRTH_CERTIFICATE_NO."')";
	 
	if(mysqli_query($conn, $sql)){
		echo "<h3>Dependent information stored successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
			header("location:HR.html");
	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn);
?>