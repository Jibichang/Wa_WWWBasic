<html>
<head>

</head>
<body>

	<?php
	$dbuser = "u07580467"; $dbpass = "PwdDBIs07580467"; $dbhost = "localhost"; $dbname = "db07580467";
	$cid = mysqli_connect($dbhost, $dbuser, $dbpass)
	or die("Unable to connect to MySQL");
	
	$selected = mysqli_select_db($cid, $dbname)
	or die("Could not select the database");
	
	mysqli_query($cid, "DROP TABLE student"); // drop table if exists
	if ( mysqli_query($cid, "CREATE TABLE student (id char(8) not null, name varchar(30), major char(2),
	mid_score integer, primary key(id))") )	echo "Done: Creating a new table.";
	else echo "Failed: " . mysqli_error($cid);
	mysqli_close($cid);
	?>

</body>
</html>