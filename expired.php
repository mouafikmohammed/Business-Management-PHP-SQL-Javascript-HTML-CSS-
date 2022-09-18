<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Management</title>
	<link rel="stylesheet" href="css/expiredpage.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" type="image/x-icon" href="img/logo.png" />
</head>

<body>
   <div id="background">
      <img src="img/backgroud.jpg" class="stretch" alt="" />
   </div>
   <div class="wrapper">
      <div class="sidebar">
         <a href="#"><img class="logo" src="img/logo.png"></a>
         <ul>
            <li><a  href="index.php"><img class="fas"src="icons/contacts.svg">Home</a></li>
            <li><a href="contacts.php"><img class="fas"src="icons/contacts.svg">Contacts</a></li>
            <li><a href="purchase.php"><img class="fas"src="icons/buy.svg">Purchase</a></li>
            <li><a href="sells.php"><img class="fas"src="icons/sells.svg">Sells</a></li>
            <li><a href="stock.php"><img class="fas"src="icons/stock.svg">Stock</a></li>
            <li class="active"><a href="expired.php"><img class="fas"src="icons/expired.svg">Expired Products</a></li>
         </ul> 
         <div class="our_team">
            <ul>
               <li class="ourteam"><a href="ourteam.php"><img src="icons/team.svg" style="width: 25px; padding-right: 5px;">Our Team</i></a></li>
            </ul>
         </div>
      </div>
      <div class="main_content">
         <div class="header">Expired
         </div>
         <form method='post' id="table"> 
            <table>
               <tr>
                  <th>Ref</th>
                  <th>Designation</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
               </tr>
               <tr>
                  <td>aaa</td>
                  <td>vvvv</td>
                  <td>3</td>
                  <td>7</td>
                  <td>21</td>
               </tr>
            </table>
         </form>
      </div>
   </div>
</body>
</html>
