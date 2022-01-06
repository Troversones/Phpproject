<?php
  $db = mysqli_connect("localhost","root","","film");

  if(!$db)
  {
      die("Failed to connect!" . mysqli_connect_error());
  }
?>