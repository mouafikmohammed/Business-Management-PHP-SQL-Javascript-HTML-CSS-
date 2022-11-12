<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

   $spac = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

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
         <!-- <a href="#"><img class="logo" src="img/logo.png"></a> -->
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
				<div class="cards" >

					<a href="sells.php">
                  <div class="card-single">
                     <img src="icons/sells.svg" width="30" height="30">
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
                        <br><br>
                     </div>
                     <div>
                        <span class="fa fa-shopping-cart"></span>
                     </div>
                  </div>
               </a>
               
               <a href="stock.php">
                  <div class="card-single">
                     <img src="icons/stock.svg" width="30" height="30">
                     <div>
                        <?php
                           require 'connection.php';
                           $query = "SELECT quantity  FROM purchase ORDER BY quantity";  
                           $query_run = mysqli_query($con, $query);
                           $row = mysqli_num_rows($query_run);
                           echo '<h4> total in stock: '.$row.'</h4>';
                        ?>
                        <small>Stock</small>
                        <br><br>
                     </div>
                     <div>
                        <span class="fa fa-newspaper-o"></span>
                     </div>
                  </div>
               </a>

					<a href="purchase.php">
                  <div class="card-single">
                     <img src="icons/buy.svg" width="30" height="30">
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
                     <div>
                        <span class="fa fa-newspaper-o"></span>
                     </div>
                  </div>
               </a>

					<a href="expired.php">
                  <div class="card-single">
                     <img src="icons/expired.svg" width="30" height="30">
                     <div>
                        <?php
                           require 'connection.php';
                           $exp_date= date("Y-m-d",strtotime('-7 day'));
                           $query = "SELECT * FROM purchase WHERE DATE BETWEEN '2000-07-02' and '$exp_date'";

                           $query_run = mysqli_query($con, $query);
                           $rowe = mysqli_num_rows($query_run);
                           echo '<h4>Expired Products: '.$rowe.'</h4>';
                        ?>
                        <small>expired</small>
                     </div>
                     <br><br><br>
                     <div>
                        <span class="fa fa-newspaper-o"></span>
                     </div>
                  </div>
               </a>


               <a href="note.php">
                  <div class="card-single">
                     <img src="img/notes.png" width="30">
                     <div>
                        <?php
                           require 'connection.php';
                           $query = "SELECT * FROM notes";  
                           $query_run = mysqli_query($con, $query);
                           $rown = mysqli_num_rows($query_run);
                           echo '<h4>My Notes: '.$rown.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>';
                        ?>
                        <small>notes</small>
                     </div>
                     <div>
                        <span class="fa fa-newspaper-o"></span>
                     </div>
                  </div>
               </a>

               <a href="contacts.php">
                  <div class="card-single">
                     <img src="icons/contacts.svg" width="30" height="30">
                     <div>
                        <?php
                           require 'connection.php';
                           $query = "SELECT * FROM contacts";  
                           $query_run = mysqli_query($con, $query);
                           $rowc = mysqli_num_rows($query_run);
                           echo '<h4>My Contacts: '.$rowc.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>';
                        ?>
                        <small>contacts</small>
                     </div>
                     <div>
                        <span class="fa fa-newspaper-o"></span>
                     </div>
                  </div>
               </a>

               <a href="#">
                  <div class="card-single">
                     <img src="img/pdf.png" width="30" height="30">
                     <div>
                        <h4>PDF printer<?php echo $spac;?></h4>
                        <small>print</small>
                     </div>
                     <div>
                        <span class="fa fa-shopping-cart"></span>
                     </div>
                  </div>
               </a>

               <a href="#">
                  <div class="card-single">
                     <img src="img/setting.png" width="30" height="30">
                     <div>
                        <h4>Settings<?php echo $spac;?></h4>
                        <small>settings</small>
                     </div>
                     <div>
                        <span class="fa fa-shopping-cart"></span>
                     </div>
                  </div>
               </a>

               <a href="#">
                  <div class="card-single">
                     <img src="img/email.png" width="30" height="30">
                     <div>
                        <h4>Send Email<?php echo $spac;?></h4>
                        <small>send email</small>
                     </div>
                     <div>
                        <span class="fa fa-shopping-cart"></span>
                     </div>
                  </div>
               </a>

				</div>
			</main>
      </div>
</body>
</html>
