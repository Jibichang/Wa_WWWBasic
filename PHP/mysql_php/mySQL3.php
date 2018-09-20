<html>
<head>
</head>
<body>
	
	<?php
	$dbuser = "u07580467"; $dbpass = "PwdDBIs07580467"; $dbhost = "localhost"; $dbname = "db07580467";
	$cid = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
	or die("Unable to connect to MySQL or database");
	
	$sql = "INSERT INTO student(id, name, major, mid_score) VALUES
	('07990987', 'Kittipong Sabaijai', 'IT', 14), ('07991234', 'Wittawat Sawasdee', 'CS', 22)";
	if (mysqli_query($cid, $sql))
	echo "Done: Adding new records.";
	else
	echo "Failed: " . mysqli_error($cid);
	mysqli_close($cid);
	?>

</body>
</html>