<?php
  if(!isset($_SESSION))
    session_start();

  $email=$_SESSION['email'];

  require_once 'Config.php';
  
  $sql="SELECT `Caption`,`Ptime`,`PosterName`,`Photo`,`Email`
  FROM `post`
  INNER JOIN `friendship`
  ON (`SenderE`='$email' AND `Email`=`RecieverE` AND `state`='Friends')
  OR (`Email`=`SenderE` AND `RecieverE`='$email' AND `state`='Friends')
  WHERE `IsPublic`=0
  UNION
  SELECT `Caption`,`Ptime`,`PosterName`,`Photo`,`Email`
  FROM `post`
  WHERE `IsPublic`=1 OR (`IsPublic`=0 AND `Email`='$email')";

  $result = mysqli_query($DBConnect, $sql);

  if(mysqli_num_rows($result)>0)
  {
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  }
  else {
    $posts="";
  }

?>
