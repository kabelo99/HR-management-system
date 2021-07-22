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
		$MINISTRY = $_POST["MINISTRY"];
		$RANK = $_POST["RANK"];
		$GRADE = $_POST["GRADE"];
		$DATE_FROM = $_POST["DATE_FROM"];
		$DATE_TO = $_POST["DATE_TO"];
	 
	// Performing insert query execution
	// here our table name is ranks_in_acting_capacity
	$sql = "INSERT INTO ranks_in_acting_capacity (FORCE_NO,MINISTRY,RANK,GRADE,DATE_FROM,DATE_TO) VALUES
		('".$FORCE_NO."','".$MINISTRY."','".$RANK."','".$GRADE."','".$DATE_FROM."','".$DATE_TO."')";
	 
	if(mysqli_query($conn, $sql)){
		echo "<h3>stored successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
			
			header("location:disciplinary_record.html");
			
	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn);
?>