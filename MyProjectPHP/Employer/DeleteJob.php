<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['JobId'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job1");	
	// Specify the query to Insert Record
	$sql = "delete from Job_Master where JobId='".$Id."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Job Deleted Succesfully");window.location=\'ManageJob.php\';</script>';

?>
</body>
</html>