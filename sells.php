<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);


# ------------- code for Table --------------------

   $res= mysqli_query($con,"select * from sells");


   #button variable
   $reference='';
   $name='';
   $quantity='';
   $price="";
   $companyname='';
   $email='';
   if(isset($_POST['reference'])){
      $reference=$_POST['reference'];
   }
   if(isset($_POST['name'])){
      $name=$_POST['name'];
   }
   if(isset($_POST['quantity'])){
      $quantity=$_POST['quantity'];
   }
   if(isset($_POST['price'])){
      $price=$_POST['price'];
   }
   if(isset($_POST['companyname'])){
      $companyname=$_POST['companyname'];
   }
   if(isset($_POST['email'])){
      $email=$_POST['email'];
   }

   #--------add db purchase---------------
   $sqls='';
   if(isset($_POST['add'])){
      $sqls = "insert into sells (reference,name,quantity,price,companyname,email) value('$reference','$name','$quantity','$price','$companyname','$email')";
      mysqli_query($con,$sqls);
      header("location: sells.php");
   }


   #-------- delete db from sells and put it in trash table---------------
   if(isset($_GET['id'])){
      $id = $_GET['id'];
      $sql1 = "INSERT INTO strash SELECT * FROM sells WHERE id='$id'";
      mysqli_query($con,$sql1);
      if(true){
         $sqls= "DELETE from sells where id='$id'";
         mysqli_query($con,$sqls);
      }
      header("location: sells.php");
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Management</title>
	<link rel="stylesheet" href="css/sell.css">
   <link rel="stylesheet" href="css/style.css">
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
            <li><a href="search.php"><img class="fas"src="icons/search.svg">Search</a></li>
            <li><a  href="index.php"><img class="fas"src="icons/dashboard.svg">DashBoard</a></li>
            <li><a href="contacts.php"><img class="fas"src="icons/contacts.svg">Contacts</a></li>
            <li><a  href="note.php"><img class="fas"src="icons/contacts.svg">Notes</a></li>
            <li><a href="purchase.php"><img class="fas"src="icons/buy.svg">Purchase</a></li>
            <li class="active"><a href="sells.php"><img class="fas"src="icons/sells.svg">Sells</a></li>
            <li><a href="stock.php"><img class="fas"src="icons/stock.svg">Stock</a></li>
            <li><a href="expired.php"><img class="fas"src="icons/expired.svg">Expired Products</a></li>
            <li><a href="logout.php"><img class="fas"src="icons/logout.svg">Logout</a></li>
         </ul> 
         <div class="our_team">
            <ul>
               <li class="ourteam"><a href="ourteam.php"><img src="icons/team.svg" style="width: 25px; padding-right: 5px;">Our Team</i></a></li>
            </ul>
         </div>
      </div>
      <div class="main_content">
         <div class="header">Sells</div>
         <form method='post' class="form-inline">
            <div class="infos">
               <label>Reference:</label>
               <input type="text" name="reference" placeholder="reference" required>
               <label>Product Name:</label>
               <input type="text" name="name" placeholder="product name"> <br><br>
               <label>Company Name:</label>
               <input type="text" name="companyname" placeholder="company Name">         
               <label>Email:</label>
               <input type="email" name="email" placeholder="enter email..." > <br><br>
               <label>Quantity:</label>
               <input type="number" name="quantity" placeholder="quantity..." min="1">
               <label>Price:</label>
               <input type="number" name="price" min="1" placeholder="price..." >

               <button name="add">ADD</button>
               <button name="del">Del</button>
            </div>
            <div>
               <table>
                  <tr>
                     <th>Reference</th>
                     <th>Name</th>
                     <th>Company Name</th>
                     <th>Email</th>
                     <th>Quantity</th>
                     <th>Price</th>
                     <th>total Price</th>
                  </tr>
                  <?php
                     while ($row = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>".$row['reference']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['companyname']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['quantity']."</td>";
                        echo "<td>".$row['price']."</td>";
                        echo "<td>".$row['price']*$row['quantity']."</td>";
                        echo "<td><a id='btn' href='sells.php?id=".$row['id']."'>Del</a></td>";
                        echo "</tr>";
                     }
                  ?>
               </table>
            </div>
         </form>
      </div>
   </div>
</body>
</html>