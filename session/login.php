<?php
  session_start();
?>
<?php
if(isset($_SESSION['user'])) {
	header("Location: main.php");
	exit();
} else {
        include("admin.php");
        $username = $_REQUEST['u'];
        $password = md5($_REQUEST['p']);
        $auth_ok=false;
    $sql = "select * from telUser where tUser = '".$username."'";
    if ($result = mysqli_query($cid, $sql)) {
      		if(mysqli_num_rows($result)>0) {
            			$row = mysqli_fetch_array($result);
          }
          if($password == $row['tPass']) {
          				$auth_ok=true;
		      }
	   }   mysqli_close($cid);
	   if($auth_ok) {
      		$_SESSION['User']=$row['tUser'];
      		header("Location: list.php");
    		    exit();
	    } else {
      		echo "<font color='red' id='unsuc'> Unsuccessful Sign On!!!</font><br>";
      		echo "<a href='./Tel_index.php'>BACK</a>";
    	}
   }
   mysqli_close($cid);
?>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel ="stylesheet" href="db.css" type="text/css" />
</head>
<body>
</body>
</html>
