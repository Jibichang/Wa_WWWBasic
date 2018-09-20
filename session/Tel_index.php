<?php
  session_start();
  include("admin.php");
  if(isset($_SESSION['user'])) {
  	header("Location: list.php");
  	exit();
  } else {
?>
<html>
<head>
  <title>Tel. Number</title>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel ="stylesheet" href="db.css" type="text/css" />
</head>
<body>
<div id="inputUser">
  <form action="login.php" method="post">
    <br>
    UserName<br /><input type="text" name="u" /><br />
    Password<br /><input type="password" name="p" /><br />
  <input type="submit" value="Sign in"/>
  </form>
  <?php  }  ?>
</div>
</body>
</html>
