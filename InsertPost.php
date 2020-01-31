<?php
session_start();
$email=$_SESSION['email'];
$PName=$_SESSION['Name'];

require_once 'Config.php';
$sql="INSERT INTO `post` (`Caption`, `Ptime`, `PosterName`, `IsPublic`, `Email`)
 VALUES ('', current_timestamp(),'$PName', '', '$email')";
 ?>
