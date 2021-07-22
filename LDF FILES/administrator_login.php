<?php
	session_start();
	if(isset($_POST['USERNAME'],$_POST['PASSWORD']))
{
	$USERNAME=$_POST['USERNAME'];
	$PASSWORD=$_POST['PASSWORD'];
	//connect to database and select database
	$conn = mysqli_connect("localhost","root","")or die('CONNECTION UNAVAILABLE');
	mysqli_select_db($conn, "Human_Resource_Management_System") or die('DATABASE NOT CREATED OR OPEN');

	$sql="SELECT USERNAME,PASSWORD from ADMINISTRATORS where USERNAME='$USERNAME' and PASSWORD='$PASSWORD'";
	$result = mysqli_query($conn, $sql);

	if($result->num_rows == 1){
	while($row = $result->fetch_assoc()) {
	  $_SESSION['USERNAME'] = $row['USERNAME'];
	  $_SESSION['PASSWORD'] = $row['PASSWORD'];
		}
		header("location: employee.html");
		
	}else{
		echo "WRONG USERNAME OR PASSWORD";
	   header("location: HR_MANAGEMENT_SYSTEM.html? error=1");
	   }
	 } else{
	   echo "FATAL ERROR: CREDENTIALS NOT RETRIEVED <br>";
	   echo "WRONG USERNAME OR PASSWORD";
	   }
   
?>