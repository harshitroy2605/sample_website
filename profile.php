<?php
include('session.php');
 ?>
<!DOCTYPE html>
<html >
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link type ="text/css" rel ="stylesheet" href="style.css"/>
   </head>
   <body>




     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">

         </ul>
         <ul class="nav navbar-navnavbar-right">
         <li class="nav-item active">
           <a class="nav-link" href="chat1\index.php">public chat <span class="sr-only">(current)</span></a>
         </li>
         </ul>
         <ul class="nav navbar-navnavbar-right">
         <li class="nav-item active">
           <a class="nav-link" href="logout.php">LOG OUT <span class="sr-only">(current)</span></a>
         </li>
         </ul>
         <ul class="nav navbar-navnavbar-right">
         <li class="nav-item active">
           <a class="nav-link" href=online.php>online gamers <span class="sr-only">(current)</span></a>
         </li>
         </ul>
       </div>
     </nav>



             <h1>WELCOME:  <i><?php echo $login_session;  ?></i></h1>

         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
              integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
              crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>




     </div>

   </body>
 </html>
