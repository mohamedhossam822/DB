<?php
require_once 'Config.php';
$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$email = $_POST['email'];
$Password=$_POST['password'];
$DOB = $_POST['DOB'];
$gender=$_POST['gender'];
echo "Hey there";
$sql ="INSERT INTO users (Email, FirstName, LastName, PS, Gender, BirthDate, NickName, PNumber, PPicture, HomeTown, MStatus, Aboutme)
VALUES ('$email' , '$firstname', '$lastname', '$Password', 'male', '$DOB', 'mohamed hossam', NULL, NULL, NULL, NULL, NULL)";
mysqli_query($DBConnect, $sql);
?>
