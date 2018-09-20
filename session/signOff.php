<?php
  session_start();
  session_destroy();
  header("Location: ./Tel_index.php");
  exit();
?>
