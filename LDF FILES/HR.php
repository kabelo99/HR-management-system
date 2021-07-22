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
		$APPOINTMENT_DATE = $_POST["APPOINTMENT_DATE"];
		$EMPLOYMENT_NUMBER = $_POST["EMPLOYMENT_NUMBER"];
		$CONFIRMATION_DATE = $_POST["CONFIRMATION_DATE"];
		$RANK_DATE = $_POST["RANK_DATE"];
		$RETIREMENT_DATE = $_POST["RETIREMENT_DATE"];
		$COST_CODE = $_POST["COST_CODE"];
		$RANK = $_POST["RANK"];
		$GRADE = $_POST["GRADE"];
		$SALARY = $_POST["SALARY"];
		$NOTCH_POINT = $_POST["NOTCH_POINT"];
		$DEPARTMENT = $_POST["DEPARTMENT"];
		$PAYMENT = $_POST["PAYMENT"];
		$APPOINTMENT_TERMS = $_POST["APPOINTMENT_TERMS"];
		$DUTY_STATION = $_POST["DUTY_STATION"];

	 
	// Performing insert query execution
	// here our table name is additional_information
	$sql = "INSERT INTO additional_information (FORCE_NO,APPOINTMENT_DATE,EMPLOYMENT_NUMBER,CONFIRMATION_DATE,RANK_DATE,
			RETIREMENT_DATE,COST_CODE,RANK,GRADE,SALARY,NOTCH_POINT,DEPARTMENT,PAYMENT,APPOINTMENT_TERMS,DUTY_STATION) VALUES
			('".$FORCE_NO."','".$APPOINTMENT_DATE."','".$EMPLOYMENT_NUMBER."','".$CONFIRMATION_DATE."','".$RANK_DATE."',
			'".$RETIREMENT_DATE."','".$COST_CODE."','".$RANK."','".$GRADE."','".$SALARY."','".$NOTCH_POINT."',
			'".$DEPARTMENT."','".$PAYMENT."','".$APPOINTMENT_TERMS."','".$DUTY_STATION."')";
	 
	if(mysqli_query($conn, $sql)){
		echo "<h3>data stored in a database successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
			
			header("location:EmploymentHistory.html");
	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn);
?>