<?php

if(isset($_POST['PostButtton']))
{

  if(!isset($_SESSION))
    session_start();

  $email=$_SESSION['email'];
  $PName=$_SESSION['Name'];

  $Cap=$_POST['post'];
  #$privacy=$_POST['Privacy'];
  echo $Cap;
  #echo $privacy;
  require_once 'Config.php';
  echo "email : ".$email;

  $sql="INSERT INTO `post` (`Caption`, `Ptime`, `PosterName`, `IsPublic`, `Email`)
   VALUES ('$Cap', current_timestamp(),'$PName', '0', '$email')";
   mysqli_query($DBConnect, $sql);
}
 ?>
