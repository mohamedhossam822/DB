<html>
<?php
session_start();
$email=$_SESSION['email'];
echo $email;
require_once 'Config.php';
$sql="SELECT `Caption`,`Ptime`,`PosterName`,`Photo`,`Email`
FROM `post`
INNER JOIN `friendship`
ON `SenderE`='$email;'
OR `RecieverN`='$email;'
AND `state`='Friends'
WHERE `IsPublic`=0
UNION
SELECT `Caption`,`Ptime`,`PosterName`,`Photo`,`Email`
FROM `post`
WHERE `IsPublic`=1";

$result = mysqli_query($DBConnect, $sql);

if(mysqli_num_rows($result)>0)
{
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $i=0;
  for($i;$i<count($posts);$i++)
  {
    echo "<br>";
    echo $posts[$i]['Email'];
    echo $posts[$i]['Caption']. "<br>";
  }
}

?>

</html>
