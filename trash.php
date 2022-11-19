<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

# ------------------------------------------
$res = mysqli_query($con,"SELECT * FROM ptrash");
$sells = mysqli_query($con,"SELECT * FROM strash");

#-------- delete db from trash and put it in purchase table---------------
if(isset($_GET['id'])){
   $id = $_GET['id'];
   $sql1 = "INSERT INTO purchase SELECT * FROM ptrash WHERE id='$id'";
   mysqli_query($con,$sql1);
   if(true){
      $sqls= "DELETE from ptrash where id='$id'";
      mysqli_query($con,$sqls);
   }
   header("location: trash.php");
}

#-------- delete db from strash and put it in sells table---------------
if(isset($_GET['id'])){
   $id = $_GET['id'];
   $sql1 = "INSERT INTO sells SELECT * FROM strash WHERE id='$id'";
   mysqli_query($con,$sql1);
   if(true){
      $sqls= "DELETE from strash where id='$id'";
      mysqli_query($con,$sqls);
   }
   header("location: trash.php");

}

if(isset($_GET['ref'])){
   $ref = $_GET['ref'];
   $sqls= "DELETE from strash where reference='$ref'";
   mysqli_query($con,$sqls);
   header("location: trash.php");
}

if(isset($_GET['refe'])){
   $ref = $_GET['refe'];
   $sqls= "DELETE from ptrash where reference='$ref'";
   mysqli_query($con,$sqls);
   header("location: trash.php");
}
?>

<h2>Trash <a href="purchase.php">Purchase</a></h2>
<table id="tbl">
   <tr>
      <th>Reference</th>
      <th>Name</th>
      <th>Company Name</th>
      <th>Email</th>
      <th>Quantity</th>
      <th>Price</th>
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
         echo "<td><a id='btn' href='trash.php?id=".$row['id']."'>Restore</a> -- <a id='btn' href='trash.php?refe=".$row['reference']."'>del</a></td>";
         echo "</tr>";
      }
   ?>
</table>

<h2>Trash <a href="sells.php">Sells</a></h2>
<table id="tbl">
   <tr>
      <th>Reference</th>
      <th>Name</th>
      <th>Company Name</th>
      <th>Email</th>
      <th>Quantity</th>
      <th>Price</th>
   </tr>
   <?php
      while ($srow = mysqli_fetch_array($sells)){
         echo "<tr>";
         echo "<td>".$srow['reference']."</td>";
         echo "<td>".$srow['name']."</td>";
         echo "<td>".$srow['companyname']."</td>";
         echo "<td>".$srow['email']."</td>";
         echo "<td>".$srow['quantity']."</td>";
         echo "<td>".$srow['price']."</td>";
         echo "<td><a id='btn' href='trash.php?id=".$srow['id']."'>Restore</a> -- <a id='btn' href='trash.php?ref=".$srow['reference']."'>del</a></td>";
         echo "</tr>";
      }
   ?>
</table>