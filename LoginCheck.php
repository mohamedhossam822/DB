<?php

  $error ='';
	if(isset($_POST['submit']))
  {
    require_once 'Config.php';
    $email = $_POST["email"];
    $Password=$_POST["password"];

    $sql="SELECT `Email`,`NickName` FROM `users` WHERE `email` = '$email' AND `PS` = '$Password'";
    $select = mysqli_query($DBConnect,$sql);
    if(mysqli_num_rows($select)>0)
    {
      $row = mysqli_fetch_assoc($select);
      
      session_start();
      $_SESSION['Name']=$row["NickName"];
      $_SESSION['email']=$email;
      header("Location: Mainpage.php");
    }
    else
    {

      $error='Email or Password is invalid';
    }
  }

?>
