<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link type ="text/css" rel ="stylesheet" href="style.css"/>
  </head>
  <body>


<div >


    <?php

    echo '<center>'.'<h1>'."online users".'<h1>'.'<center/>';
    $connection=mysql_connect("localhost","root","");
    $db=mysql_select_db("sample_website",$connection);
    $online="SELECT firstname FROM sample_website where online='1'";
    $record=mysql_query($online);

    while ($anyway=mysql_fetch_assoc($record)){
    echo '<center>'.'<p>'. '<a href="">'.$anyway['firstname'].'<a/>'.'<br >'.'<p>'.'<center/>';

    }
     ?>
</div>
</body>
</html>
