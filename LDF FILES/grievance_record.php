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
		$GRIEVANCE_DESCRIPTION = $_POST["GRIEVANCE_DESCRIPTION"];
		$OUTCOME = $_POST["OUTCOME"];
		$REDRESS = $_POST["REDRESS"];

	 
	// Performing insert query execution
	// here our table name is grievance_record
	$sql = "INSERT INTO grievance_record (FORCE_NO,GRIEVANCE_DESCRIPTION,OUTCOME,REDRESS) VALUES
			('".$FORCE_NO."','".$GRIEVANCE_DESCRIPTION."','".$OUTCOME."','".$REDRESS."')";
	 
	if(mysqli_query($conn, $sql)){
		echo "<h3>data stored successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
			
			header("location:PensionFundDetails.html");
			
	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn);
?>