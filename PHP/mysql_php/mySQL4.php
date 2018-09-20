<html>
<head>
</head>
<body>
		
	<?php
	$dbuser = "u07580467"; $dbpass = "PwdDBIs07580467"; $dbhost = "localhost"; $dbname = "db07580467";
	$cid = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to MySQL or database");
	
	$sql="SELECT * from student";
	if ($result = mysqli_query($cid, $sql)) {
	while ($row = mysqli_fetch_array($result)) {
		printf("ID: %s<br/>\n", $row["id"]);
		printf("Name of Student: %s<br/>\n", $row["name"]);
		printf("Major: %s<br/>\n", $row["major"]);
		printf("Midterm Score: %d<br/><hr/>\n", $row["mid_score"]);
		} 
	} else echo "None.";
	mysqli_close($cid);
?>

</body>
</html>