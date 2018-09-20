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
		$sql = "select * from TelNumber where telName = '".$_REQUEST['telName']."'";
		if($result = mysqli_query($cid, $sql)){
			$row = mysqli_fetch_array($result);
	?>
			<form action='edit.php' method='GET'>
			NAME : <input type=text name='telName' value='<?php printf("%s", $row["telName"]); ?>'><br>

			Tel. : <input type=text name='telNum' value='<?php printf("%s", $row["telNum"]); ?>'><br>


			<input type=submit value='SAVE'>
			</form><?php
		}
		mysqli_close($cid);
	?>
</body>
</html>
