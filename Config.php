<?php
$DBConnect=mysqli_connect('localhost','root','','SocialMedia');

if(!$DBConnect)
{
echo 'Error : ' . mysqli_connect_error();
}
?>
