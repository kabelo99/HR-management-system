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
		$DATEJOINED = $_POST["DATEJOINED"];
		$CONTRIBUTIONDATE = $_POST["CONTRIBUTIONDATE"];
		$EMPLOYERS_CONTRIBUTION = $_POST["EMPLOYERS_CONTRIBUTION"];
		$EMPLOYEES_CONTRIBUTION = $_POST["EMPLOYEES_CONTRIBUTION"];

	 
	// Performing insert query execution
	// here our table name is pension_fund_details
	$sql = "INSERT INTO pension_fund_details (FORCE_NO,DATEJOINED,CONTRIBUTIONDATE,EMPLOYERS_CONTRIBUTION,EMPLOYEES_CONTRIBUTION) VALUES
			('".$FORCE_NO."','".$DATEJOINED."','".$CONTRIBUTIONDATE."','".$EMPLOYERS_CONTRIBUTION."','".$EMPLOYEES_CONTRIBUTION."')";
	 
	if(mysqli_query($conn, $sql)){
		echo "<h3>All employee's information stored successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";

	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn);
?>