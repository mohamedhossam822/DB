<?php
echo "Search ";

  if(!isset($_SESSION))
    session_start();

  $email=$_SESSION['email'];
  $toSearch=$_POST['search'];

  echo $toSearch;
  require_once 'Config.php';
  $sql="SELECT `NickName`,`Email`
  FROM `users`
  WHERE `Email`='$toSearch'";
  $result=mysqli_query($DBConnect, $sql);
  if(mysqli_num_rows($result)>0)
  {
    $usersfound = mysqli_fetch_all($result, MYSQLI_ASSOC);
    include 'SearchResults.php';
  }
  else {
    echo "No Records found";
  }
?>
