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
	<h1>List of Telephone Number</h1>
	<a href = "addList.php">[ADD]</a>
	<hr>
	<div id="textX"></div>
	<?php
		include ('admin.php');
		$sql = "select * from TelNumber";
		if($result = mysqli_query($cid, $sql)){
			$i = 0;
			while($row = mysqli_fetch_array($result)){
				printf("Name : %s<br>",$row['telName']);
				printf("Tel. Number : %s<br>",$row['telNum']);
				printf("[<a href = 'editList.php?telName=%s'>EDIT</a>]",$row['telName']);
				printf("[<a href = 'delete.php?telName=%s'>DELETE</a>]<hr>", $row['telName']);
				$i++;
			}
			if($i == 0){
				echo "None.";
			}
		}
		mysqli_close($cid);
	?>
	</div>
</body>
</html>
