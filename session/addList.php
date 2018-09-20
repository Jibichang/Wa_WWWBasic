<?php
	include("check_log.php");
 ?>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel ="stylesheet" href="db.css" type="text/css" />
</head>
<body>
	<form action="add.php" method="GET">
		NAME  : <input type=text name='telName'><br>
		Tel.  : <input type=text name='telNum'><br>

		<input type=submit value='ADD'>
	
	</form>
</body>
</html>
