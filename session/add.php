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
<?php
	include('admin.php');
	$sql = "insert into TelNumber(telName, telNum) values
			('".$_REQUEST['telName']."', '".$_REQUEST['telNum']."')";
	if(mysqli_query($cid, $sql)){
		echo "Done: Adding a new record.";
	}
	else{
		echo "Failed: ".mysqli_error($cid);
	}
	mysqli_close($cid);
?>
<br>
<a href = 'list.php'>[BACK]</a>
</body>
</html>
