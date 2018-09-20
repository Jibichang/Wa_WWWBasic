<html>
<head>

</head>
<body>
	
	<?php
	$dbuser = "u07580467"; $dbpass = "PwdDBIs07580467"; $dbhost = "localhost"; $dbname = "db07580467";
	$cid = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
	or die("Unable to connect to MySQL or database");
	
	$result = mysqli_query($cid, "INSERT INTO student(id, name, major, mid_score)
	VALUES ('07990999', 'Somchai Rukdee', 'CS', 29) ");
	if($result)
	echo "Done: Adding a new record.";
	else
	echo "Failed: " . mysqli_error($cid);
	mysqli_close($cid);
	?>

</body>
</html>