<html>
<head>
</head>
<body>

	<?php
	$dbuser = "u07580467"; $dbpass = "PwdDBIs07580467"; $dbhost = "localhost"; $dbname = "db07580467";
	$cid = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
	or die("Unable to connect to MySQL or database");
	
	$sql="UPDATE student SET major='IT' WHERE id='07990999'";
	if ($result = mysqli_query($cid, $sql)) {
		$rows_affected = mysqli_affected_rows($cid);
	echo "Done: Updating ".$rows_affected." affected row(s).";
	} else	echo "Failed: Updating data.";
	mysqli_close($cid);
	?>	

	
</body>
</html>