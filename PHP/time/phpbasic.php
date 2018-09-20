<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
	<link rel="stylesheet" href="/lib/bootstrap.min.css">
	<link rel ="stylesheet" href="cal.css" type="text/css" />
</head>
<title></title>
<style>
body{

	<?php
		if(date("sa")%7 == 0){
			echo "background-color: #ff1a1a;";
		}
		else if (date("sa")%7 == 1){
			echo "background-color: #ffff66;";
		}
		else if (date("sa")%7 == 2){
			echo "background-color:#ff99cc;";
		}
		else if (date("sa")%7 == 3){
			echo "background-color: #99ff33;";
		}
		else if (date("sa")%7 == 4){
			echo "background-color: #ff8533;";
		}
		else if (date("sa")%7 == 5){
			echo "background-color: #66d9ff;";
		}
		else{
			echo "background-color: #9999ff;";
		}
	?>
}
h1{
	padding-top: 50px;
	font-size: 40px;
  font-family: 'Gloria Hallelujah', cursive;
  text-align: center;
}
</style>
<body>
	<h1><?php $n = $_GET["number"];  echo "$n"; ?></h1>
</body>
</html>
