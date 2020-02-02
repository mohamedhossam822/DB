<?php
if(!isset($_SESSION))
  session_start();

$email=$_SESSION['email'];

require_once 'Config.php';
$sql="SELECT `NickName`,`Email`
FROM `users`
INNER JOIN `friendship`
ON (`Email`=`SenderE` AND `RecieverE`='$email' AND `state`='Pending')";
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
