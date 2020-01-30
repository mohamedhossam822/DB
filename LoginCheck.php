<?php

  $error ='';
	if(isset($_POST['submit']))
  {
    require_once 'Config.php';
    $email = $_POST["email"];
    $Password=$_POST["password"];

    $sql="SELECT `Email` FROM `users` WHERE `email` = '$email' AND `PS` = '$Password'";
    $select = mysqli_query($DBConnect,$sql);
    if(mysqli_num_rows($select)>0)
    {
      header("Location: Mainpage.php");
    }
    else
    {

      $error='Email or Password is invalid';
    }
  }

?>
