<html>
	<head>
		<title>Human_Resource_Management_System</title>
		<link rel="stylesheet" href="HR style.css">
		<style type="text/css">
			 table tr td{
				 color:blue;
				 font-size:1.0em;
			 }
		</style>	
	
	</head>

	<div  align="center">
	<table border="1" width="150" cellpadding="5">
	 <tr>
			<td> FORCE_NO </td>
			<td> EMPLOYMENT_NO </td>
			<td> TITLE </td>
			<td> SURNAME </td>
			<td> FIRSTNAME </td>
			<td> EMAIL </td>
			<td> OTHER_NAMES </td>
			<td> PREVIOUS_SURNAME </td>
			<td> GENDER </td>
			<td> DOB </td>
			<td> NID_NUMBER </td>
			<td> ISSUE_DATE </td>
			<td> EXPIRY_DATE </td>
			<td> CITIZENSHIP </td>
			<td> MARITAL_STATUS </td>
			<td> MOBILE_PHONE </td>
			<td> WORK_PHONE </td>
			<td> FAX_NUMBER </td>
			<td> PHOTO </td>
			<td> ANY_DISABILITY </td>
			<td> TYPE_F_DISABILITY </td>
	 </tr>
<?php

	mysql_connect('localhost','root','') or die (' NO CONNECTION ');
	mysql_select_db('Human_Resource_Management_System') or die ('FAILED TO CONNECT TO DATABASE, NO DATABASE ');
	$display=mysql_query(" select * from employee_details " );

	while($sql=(mysql_fetch_array($display)))
	{
	
			$FORCE_NO=$sql[0];
			$EMPLOYMENT_NO=$sql[1];
			$TITLE=$sql[2];
			$SURNAME=$sql[3];
			$FIRSTNAME=$sql[4];
			$EMAIL=$sql[5];
			$OTHER_NAMES=$sql[6];
			$PREVIOUS_SURNAME=$sql[7];
			$GENDER=$sql[8];
			$DOB=$sql[9];
			$NID_NUMBER=$sql[10];
			$ISSUE_DATE=$sql[11];
			$EXPIRY_DATE=$sql[12];
			$CITIZENSHIP=$sql[13];
			$MARITAL_STATUS=$sql[14];
			$MOBILE_PHONE=$sql[15];
			$WORK_PHONE=$sql[16];
			$FAX_NUMBER=$sql[17];
			$PHOTO=$sql[18];
			$ANY_DISABILITY=$sql[19];
			$TYPE_F_DISABILITY=$sql[20];

		echo "<tr>
				<td> $FORCE_NO </td>
				<td> $EMPLOYMENT_NO </td>
				<td> $TITLE </td>
				<td> $SURNAME </td>
				<td> $FIRSTNAME </td>
				<td> $EMAIL </td>
				<td> $OTHER_NAMES </td>
				<td> $PREVIOUS_SURNAME </td>
				<td> $GENDER </td>
				<td> $DOB </td>
				<td> $NID_NUMBER </td>
				<td> $ISSUE_DATE </td>
				<td> $EXPIRY_DATE </td>
				<td> $CITIZENSHIP </td>
				<td> $MARITAL_STATUS </td>
				<td> $MOBILE_PHONE </td>
				<td> $WORK_PHONE </td>
				<td> $FAX_NUMBER </td>
				<td> $PHOTO </td>
				<td> $ANY_DISABILITY </td>
				<td> $TYPE_F_DISABILITY </td>
			</tr>";
	}	

?>
	</table>
	</body>	
</html>