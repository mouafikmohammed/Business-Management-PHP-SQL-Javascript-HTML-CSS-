<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Management</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/search.css">
   <link rel="icon" type="image/x-icon" href="img/logo.png" />
</head>

<body>
   <div id="background">
      <img src="img/backgroud.jpg" class="stretch" alt="" />
   </div>
   <div class="wrapper">
      <div class="sidebar">
         <!-- <a href="#"><img class="logo" src="img/logo.png"></a> -->
         <ul>
            <li class="active"><a  href="search.php"><img class="fas"src="icons/search.svg">Search</a></li>
            <li><a  href="index.php"><img class="fas"src="icons/dashboard.svg">DashBoard</a></li>
            <li><a href="contacts.php"><img class="fas"src="icons/contacts.svg">Contacts</a></li>
            <li><a  href="note.php"><img class="fas"src="icons/contacts.svg">Notes</a></li>
            <li><a href="purchase.php"><img class="fas"src="icons/buy.svg">Purchase</a></li>
            <li><a href="sells.php"><img class="fas"src="icons/sells.svg">Sells</a></li>
            <li><a href="stock.php"><img class="fas"src="icons/stock.svg">Stock</a></li>
            <li><a href="expired.php"><img class="fas"src="icons/expired.svg">Expired Products</a></li>
            <li><a href="logout.php"><img class="fas"src="icons/logout.svg">Logout</a></li>
         </ul> 
         <div class="our_team">
            <ul>
               <li class="ourteam"><a href="ourteam.php"><img src="icons/team.svg">Our Team</i></a></li>
            </ul>
         </div>
      </div>
      <div class="main_content">
         <div class="header">Search</div>
         <!-- Search ----------------->
         <div class="search"> Search Place, write code here for searching
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
         </div>
      </div>
   </div>
</body>
</html>
