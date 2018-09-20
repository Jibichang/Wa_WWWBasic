<html>
<head>
</head>
<body>
	<?php
	$dbuser = "u07580467"; $dbpass = "PwdDBIs07580467"; $dbhost = "localhost"; $dbname = "db07580467";
	$cid = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
	or die("Unable to connect to MySQL or database");
	
	$sql="DELETE FROM student WHERE id='07990999'";
	if ($result = mysqli_query($cid, $sql)) {
	$rows_affected = mysqli_affected_rows($cid);
	echo "Done: Deleteing ".$rows_affected." affected row(s).";
	} else
	echo "Failed: Deleting data.";
	mysqli_close($cid);
	?>		
</body>
</html>