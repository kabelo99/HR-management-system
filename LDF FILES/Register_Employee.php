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
		$EMPLOYMENT_NO = $_POST["EMPLOYMENT_NO"];
		$TITLE = $_POST["TITLE"];
		$SURNAME = $_POST["SURNAME"];
		$FIRSTNAME = $_POST["FIRSTNAME"];
		$EMAIL = $_POST["EMAIL"];
		$OTHER_NAMES = $_POST["OTHER_NAMES"];
		$PREVIOUS_SURNAME = $_POST["PREVIOUS_SURNAME"];
		$GENDER = $_POST["GENDER"];
		$DOB = $_POST["DOB"];
		$NID_NUMBER = $_POST["NID_NUMBER"];
		$ISSUE_DATE = $_POST["ISSUE_DATE"];
		$EXPIRY_DATE = $_POST["EXPIRY_DATE"];
		$CITIZENSHIP = $_POST["CITIZENSHIP"];
		$MARITAL_STATUS = $_POST["MARITAL_STATUS"];
		$MOBILE_PHONE = $_POST["MOBILE_PHONE"];
		$WORK_PHONE = $_POST["WORK_PHONE"];
		$FAX_NUMBER = $_POST["FAX_NUMBER"];
		$PHOTO = $_POST["PHOTO"];
		$ANY_DISABILITY = $_POST["ANY_DISABILITY"];
		$TYPE_F_DISABILITY = $_POST["TYPE_F_DISABILITY"];
	 
	// Performing insert query execution
	// here our table name is employee_details
	$sql = "INSERT INTO EMPLOYEE_DETAILS (FORCE_NO, EMPLOYMENT_NO,TITLE,SURNAME,FIRSTNAME,EMAIL,
			OTHER_NAMES,PREVIOUS_SURNAME,GENDER,DOB,NID_NUMBER,ISSUE_DATE,EXPIRY_DATE,CITIZENSHIP,
			MARITAL_STATUS,MOBILE_PHONE,WORK_PHONE,FAX_NUMBER,PHOTO,ANY_DISABILITY,TYPE_F_DISABILITY) VALUES
			('".$FORCE_NO."','".$EMPLOYMENT_NO."','".$TITLE."','".$SURNAME."','".$FIRSTNAME."','".$EMAIL."',
			'".$OTHER_NAMES."','".$PREVIOUS_SURNAME."','".$GENDER."','".$DOB."','".$NID_NUMBER."','".$ISSUE_DATE."',
			'".$EXPIRY_DATE."','".$CITIZENSHIP."','".$MARITAL_STATUS."','".$MOBILE_PHONE."','".$WORK_PHONE."','".$FAX_NUMBER."',
			'".$PHOTO."','".$ANY_DISABILITY."','".$TYPE_F_DISABILITY."')";
	 
	if(mysqli_query($conn, $sql)){
		echo "<h3>data stored in a database successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";
			
			header("location:spouse.html");

	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn);
?>