<?php
include('session.php');
?>
<?php
session_start();
$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("sample_website",$connection);
$new_value='0';
$online_put= mysql_query("UPDATE sample_website SET online='$new_value' WHERE email='$user_check'",$connection );
$online_check=mysql_query("select online from sample_website where email='$user_check'",$connection );
$rows=mysql_fetch_assoc($online_check);
$online=$rows['online'];




if(session_destroy())
{
  header("location:login.php");
}
 ?>
