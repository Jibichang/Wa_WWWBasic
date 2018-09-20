<html>
<head>
</head>
<title></title>
<style>
body{
	<?php
		if(date("sa")%7 == 0){
			echo "background-color: red;";
		}
		else if (date("sa")%7 == 1){
			echo "background-color: yellow;";
		}
		else if (date("sa")%7 == 2){
			echo "background-color: pink;";
		}
		else if (date("sa")%7 == 3){
			echo "background-color: green;";
		}
		else if (date("sa")%7 == 4){
			echo "background-color: orange;";
		}
		else if (date("sa")%7 == 5){
			echo "background-color: blue;";
		}
		else{
			echo "background-color: purple;";
		}
	?>
}
</style>
<body>

<table border='1'>
	<tr><th colspan='2'><?php $n = $_GET["number"];  echo "$n"; ?></th></tr>
	<?php
		for($i=1; $i<=12; $i++){
			?>
			<tr>
				<td><?php echo "$i"; ?></td>
				<td><?php $n = $_GET["number"];  $ans = $i*$n; echo "$ans"; ?></td>
			</tr>
			<?php
		}
	?>
</table>
</body>
</html>
