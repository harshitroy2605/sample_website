
<?php
$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("sample_website",$connection);
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select email from sample_website where email='$user_check'",$connection );
$row=mysql_fetch_assoc($ses_sql);
$login_session=$row['email'];
$new_value='1';
$online_put= mysql_query("UPDATE sample_website SET online='$new_value' where email='$user_check' ",$connection );

$login_session=$row['email'];
if(!isset($login_session)){
  mysql_close($connection);
  header('location:login.php');

}

 ?>
