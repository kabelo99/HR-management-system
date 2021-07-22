<html>
	<head>
		<title>Human_Resource_Management_System</title>
		<link rel="stylesheet" href="HR style.css">
		<style type="text/css">
			 table tr th{
				 color:red;
				 font-weight:bold;
				 font-size:1.2em;
			 }
			 table tr td{
				 color:#fff;
				 font-size:1.0em;
			 }
		</style>	
	
	</head>

	<div  align="center">
	
	<H3>ENTER FORCE NUMBER OF THE EMPLOYEEE TO FIND HIS/HER SPOUSE DETAILS</H3>
	<form>
		<labe>FORCE NUMBER</label><input type="text" name="FORCE_NO" placehoder="enter force number"/>
	</form>
	
	<H1>ALL SPOUCE DETAILS </H1>
	<HR><HR>
	<table border="2" width="200" cellpadding="10">
	 <tr>
			<td> FORCE_NO </td>
			<td> SURNAME </td>
			<td> NAMES </td> 
			<td> GENDER </td>
			<td> DOB </td>
			<td> CITIZENSHIP </td>
			<td> NATIONALITY </td>
			<td> NID_NUMBER </td>
			<td> HOME_ADDRESS </td>
			<td> MOBILE_NO </td>
	 </tr>
<?php

	mysql_connect('localhost','root','') or die (' NO CONNECTION ');
	mysql_select_db('Human_Resource_Management_System') or die ('FAILED TO CONNECT TO DATABASE, NO DATABASE ');
	$display=mysql_query(" select * from spouce_details " );

	while($sql=(mysql_fetch_array($display)))
	{
	

			$FORCE_NO=$sql[0];
			$SURNAME=$sql[1];
			$NAMES=$sql[2];
			$GENDER=$sql[3];
			$DOB=$sql[4];
			$CITIZENSHIP=$sql[5];
			$NATIONALITY=$sql[6];
			$NID_NUMBER=$sql[7];
			$HOME_ADDRESS=$sql[8];
			$MOBILE_NO=$sql[9];

		echo "<tr>
				<td> $FORCE_NO </td>
				<td> $SURNAME </td>
				<td> $NAMES </td>
				<td> $GENDER </td>
				<td> $DOB </td>
				<td> $CITIZENSHIP </td>
				<td> $NATIONALITY </td>
				<td> $NID_NUMBER </td>
				<td> $HOME_ADDRESS </td>
				<td> $MOBILE_NO </td>
			</tr>";
	}	

?>
	</table>
	</body>	
</html>