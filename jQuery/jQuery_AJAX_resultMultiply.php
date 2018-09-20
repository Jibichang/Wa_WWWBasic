<html>

<body>
	<?php $q = $_REQUEST["num"]; ?>
<?php echo "$n"; ?>
<table >
	<tr><th colspan='2'><?php echo "$q"; ?></th></tr>
	<?php
		for($i=1; $i<=12; $i++){
			?>
			<tr>
				<td><?php echo "$i"; ?></td>
				<td><?php $ans = $i*$q; echo "$ans"; ?></td>
			</tr>
			<?php
		}
	?>
</table>
</body>
</html>
