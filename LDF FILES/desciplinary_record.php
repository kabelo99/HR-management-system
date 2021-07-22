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
		$MISCONDUCT = $_POST["MISCONDUCT"];
		$VERDICT = $_POST["VERDICT"];
		$VERDICT_DATE = $_POST["VERDICT_DATE"];
		$SANCTION = $_POST["SANCTION"];

	 
	// Performing insert query execution
	// here our table name is desciplinary_record
	$sql = "INSERT INTO desciplinary_record (FORCE_NO,MISCONDUCT,VERDICT,VERDICT_DATE,SANCTION) VALUES
			('".$FORCE_NO."','".$MISCONDUCT."','".$VERDICT."','".$VERDICT_DATE."','".$SANCTION."')";
	 
	if(mysqli_query($conn, $sql)){
		echo "<h3>information stored successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
			
			header("location:grievance_record.html");
			
	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn);
?>