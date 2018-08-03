<?php
error_reporting(0);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$phone_number=$_POST['phone_number'];
$con = mysql_connect("localhost","root","");

if(!$con)
{
die('Could not connect:'.mysql_error());
}
mysql_select_db("sample_website",$con);

$query="INSERT INTO sample_website(firstname,lastname,email,password,country,gender,phonenumber)VALUES('$fname','$lname','$email','$password','$country','$gender','$phone_number')";
if(!mysql_query($query,$con))
{
die('Error in inserting records'.mysql_error);
}else
{
echo "Account Created".'<a href="login.php">'."\n click here to log in";
}
?>
