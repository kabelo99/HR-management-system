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
		$PROFESSIONAL_QUALIFICATION = $_POST["PROFESSIONAL_QUALIFICATION"];
		$INSTITUTION = $_POST["INSTITUTION"];
		$COUNTRY = $_POST["COUNTRY"];
		$YEAR_OBTAINED = $_POST["YEAR_OBTAINED"];


	 
	// Performing insert query execution
	// here our table name is professional_qualification
	$sql = "INSERT INTO professional_qualification (FORCE_NO,PROFESSIONAL_QUALIFICATION,INSTITUTION,COUNTRY,YEAR_OBTAINED) VALUES
			('".$FORCE_NO."','".$PROFESSIONAL_QUALIFICATION."','".$INSTITUTION."','".$COUNTRY."','".$YEAR_OBTAINED."')";
	 
	if(mysqli_query($conn, $sql)){
		echo "<h3>Qualifications' information stored successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
			
			header("location:TRAINING.html");

	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn);
?>