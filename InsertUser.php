<?php
require_once 'Config.php';
$email = $_POST["email"];
$firstname = $_POST["first-name"];
$lastname = $_POST["last-name"];
$Password=$_POST["password"];
$gender=$_POST["gender"];
$DOB = $_POST["DOB"];
$Nick=$firstname. ' ' .$lastname;
$PNumber=$_POST["phone"];
$MartialS=$_POST["martial"];
$country=$_POST["country"];
$brief=$_POST["brief"];
$sql ="INSERT INTO users
(Email, FirstName, LastName, PS, Gender, BirthDate, NickName, PNumber, PPicture, HomeTown, MStatus, Aboutme)
VALUES
('$email' , '$firstname', '$lastname', '$Password', '$gender', '$DOB', '$Nick','$PNumber', NULL,'$country', '$MartialS', '$brief')";
mysqli_query($DBConnect, $sql);
header("Location: SignUpSuccess.php");
?>
