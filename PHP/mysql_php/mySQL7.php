<html>
<head>
</head>
<body>

	<?php
	$dbuser = "u07580467"; $dbpass = "PwdDBIs07580467"; $dbhost = "localhost"; $dbname = "db07580467";
	$cid = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
	or die("Unable to connect to MySQL or database");
	
	$s1 = "INSERT INTO student(id,name,major,mid_score) VALUES";
	$q = "','";	
	$sql = $s1."("."'". $_REQUEST['id'].$q.$_REQUEST['name'].$q.$_REQUEST['major']."',".$_REQUEST['mid_score'].")";
	
	if (mysqli_query($cid, $sql))
		echo "Done: Adding a new record.";
	else
		echo "Failed: " . mysqli_error($cid);
	mysqli_close($cid);
	
	
	?>	
		
</body>
</html>