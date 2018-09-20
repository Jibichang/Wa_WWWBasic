<?php
  session_start();
  include("admin.php");
  if(!isset($_SESSION['User'])){
    Header("Location: Tel_index.php");
    exit();
  } else {
    echo "User : ".$_SESSION['User']." ";
    echo "<a href = 'signOff.php'>Sign out</a><br><hr>";

  }
?>
