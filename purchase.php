<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Management</title>
	<link rel="stylesheet" href="css/purchase.css">
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
               <li><a  href="index.php"><img class="fas"src="icons/home.svg">Home</a></li>
               <li><a href="contacts.php"><img class="fas"src="icons/contacts.svg">Contacts</a></li>
               <li class="active"><a href="purchase.php"><img class="fas"src="icons/buy.svg">Purchase</a></li>
               <li><a href="sells.php"><img class="fas"src="icons/sells.svg">Sells</a></li>
               <li><a href="stock.php"><img class="fas"src="icons/stock.svg">Stock</a></li>
               <li><a href="expired.php"><img class="fas"src="icons/expired.svg">Expired Products</a></li>
         </ul> 
         <div class="our_team">
            <ul>
               <li class="ourteam"><a href="ourteam.php"><img src="icons/team.svg">Our Team</i></a></li>
            </ul>
         </div>
      </div>
      <div class="main_content">
         <div class="header">Purchase</div>
         <!--Purchase-->
         <!--add products-->
         <form method='post'>
            <aside>
               <div id="buy">
                  <h3>ADD Products</h3>
                  <label>Reference</label> <br>
                  <input type="text" name="reference" id="reference" placeholder="reference" required> <br>
                  <label>Product Name</label> <br>
                  <input type="text" name="name" id="name" placeholder="product name" required> <br>
                  <label>Quantity</label> <br>
                  <input type="number" name="quantity" id="quantity" placeholder="quantity" min="1" required> <br>
                  <label>Price</label><br>
                  <input type="number" name="price" id="price" placeholder="price" min="1" required><br>
                  <label>Company Name</label><br>
                  <input type="text" name="price" id="price" placeholder="company name" required><br>
                  <label>Email</label><br>
                  <input type="email" name="price" id="price" placeholder="email" required><br>
                  <button name="add">ADD</button>
                  <button name="del">Delete</button>
               </div>
            </aside>
            <!--table-->
            <main class="tables_buy">
               <table id="tbl">
                  <tr>
                     <th>Reference</th>
                     <th>Name</th>
                     <th>Quantity</th>
                     <th>Price</th>
                     <th>total Price</th>
                     <th>Company Name</th>
                     <th>Email</th>
                  </tr>
                  <tr>
                     <td>R544FY7</td>
                     <td>HP EliteBook</td>
                     <td>40</td>
                     <td>400</td>
                     <td>total</td>
                     <td>DireX</td>
                     <td>mlk@email.com</td>
                  </tr>
                  <tr>
                     <td>R544FY7</td>
                     <td>HP EliteBook</td>
                     <td>40</td>
                     <td>400</td>
                     <td>total</td>
                     <td>DireX</td>
                     <td>mlk@email.com</td>
                  </tr>
                  <tr>
                     <td>R544FY7</td>
                     <td>HP EliteBook</td>
                     <td>40</td>
                     <td>400</td>
                     <td>total</td>
                     <td>DireX</td>
                     <td>mlk@email.com</td>
                  </tr>
                  <tr>
                     <td>R544FY7</td>
                     <td>HP EliteBook</td>
                     <td>40</td>
                     <td>400</td>
                     <td>total</td>
                     <td>DireX</td>
                     <td>mlk@email.com</td>
                  </tr>
                  <tr>
                     <td>R544FY7</td>
                     <td>HP EliteBook</td>
                     <td>40</td>
                     <td>400</td>
                     <td>total</td>
                     <td>DireX</td>
                     <td>mlk@email.com</td>
                  </tr>
                  <tr>
                     <td>R544FY7</td>
                     <td>HP EliteBook</td>
                     <td>40</td>
                     <td>400</td>
                     <td>total</td>
                     <td>DireX</td>
                     <td>mlk@email.com</td>
                  </tr>
                  <tr>
                     <td>R544FY7</td>
                     <td>HP EliteBook</td>
                     <td>40</td>
                     <td>400</td>
                     <td>total</td>
                     <td>DireX</td>
                     <td>mlk@email.com</td>
                  </tr>
                  <tr>
                     <td>R544FY7</td>
                     <td>HP EliteBook</td>
                     <td>40</td>
                     <td>400</td>
                     <td>total</td>
                     <td>DireX</td>
                     <td>mlk@email.com</td>
                  </tr>
                  <tr>
                     <td>R544FY7</td>
                     <td>HP EliteBook</td>
                     <td>40</td>
                     <td>400</td>
                     <td>total</td>
                     <td>DireX</td>
                     <td>mlk@email.com</td>
                  </tr>
                  <tr>
                     <td>R544FY7</td>
                     <td>HP EliteBook</td>
                     <td>40</td>
                     <td>400</td>
                     <td>total</td>
                     <td>DireX</td>
                     <td>mlk@email.com</td>
                  </tr>
                  <tr>
                     <td>R544FY7</td>
                     <td>HP EliteBook</td>
                     <td>40</td>
                     <td>400</td>
                     <td>total</td>
                     <td>DireX</td>
                     <td>mlk@email.com</td>
                  </tr>
               </table>
            </main>
         </form>
      </div>
</body>
</html>