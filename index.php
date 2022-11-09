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
   <link rel="stylesheet" href="css/dashboard.css">
   <link rel="icon" type="image/x-icon" href="img/logo.png" />
   <script src="js/location.js"></script>
</head>

<body>
   <div id="background">
      <img src="img/backgroud.jpg" class="stretch" alt="" />
   </div>
   <div class="wrapper">
      <div class="sidebar">
         <a href="#"><img class="logo" src="img/logo.png"></a>
         <ul>
               <li><a href="search.php"><img class="fas"src="icons/search.svg">Search</a></li>
               <li class="active"><a  href="index.php"><img class="fas"src="icons/dashboard.svg">DashBoard</a></li>
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
         <div class="header">DashBoard</div>
         <!------------------------------------------------------->
         <div class="weatherWidget"></div> <!--this div for weather-->
         <!--write here the Dashboard code-->
         <main>
				<div class="cards">
					
					<div class="card-single">
						<img src="img/sales.png" width="30" height="30">
						<div>
							<?php
								require 'connection.php';
								$query = "SELECT * FROM sells";  
								$query_run = mysqli_query($con, $query);

								# $row = mysqli_num_rows($query_run);
								$row = mysqli_fetch_array($query_run);

								$tot = $row['price']*$row['quantity'];
								while($row = mysqli_fetch_array($query_run)){
									$tot1 = $tot + $row['price']*$row['quantity'];
								}
								echo '<h4> total sales: '.$tot1.'$</h4>';
							?>
							<small>sales</small>
						</div>
						<div>
							<span class="fa fa-shopping-cart"></span>
						</div>
					</div>

					<div class="card-single">
					<img src="img/stock.png" width="30" height="30">
						<div>
							<?php
								require 'connection.php';
								$query = "SELECT quantity  FROM purchase ORDER BY quantity";  
								$query_run = mysqli_query($con, $query);
								$row = mysqli_num_rows($query_run);
								echo '<h4> total in stock: '.$row.'</h4>';
							?>
							<small>Stock</small>
						</div>
						<div>
							<span class="fa fa-newspaper-o"></span>
						</div>
					</div>

					<div class="card-single">
						<img src="img/purshases.png" width="30" height="30">
						<div>
							<?php
								require 'connection.php';
								$query = "SELECT * FROM purchase";
								$query_run = mysqli_query($con, $query);

								$row = mysqli_fetch_array($query_run);

								$purchase = $row['price']*$row['quantity'];
								while($row = mysqli_fetch_array($query_run)){
									$purchase1 = $purchase + $row['price']*$row['quantity'];
								}
								echo '<h4> total purchases: '.$purchase1.'$</h4>';
							?>
							<small>purchase</small>
						</div>
					</div>
					<div class="card-single">
						<img src="img/purshases.png" width="30" height="30">
						<div>
							<?php
								require 'connection.php';
								$exp_date= date("Y-m-d",strtotime('-7 day'));
								$query = "SELECT * FROM purchase WHERE DATE BETWEEN '2000-07-02' and '$exp_date'";

								$query_run = mysqli_query($con, $query);
								$row1 = mysqli_num_rows($query_run);
								echo '<h4> Expired Products: '.$row1.'</h4>';
							?>
							<small>purchase</small>
						</div>
					</div>
				</div>
			</main>
      </div>
</body>
</html>
