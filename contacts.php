<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Management</title>
	<link rel="stylesheet" href="css/contacts.css">
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
               <li class="active"><a  href="contacts.php"><img class="fas"src="icons/contacts.svg">Contacts</a></li>
               <li><a href="purchase.php"><img class="fas"src="icons/buy.svg">Purchase</a></li>
               <li><a href="sells.php"><img class="fas"src="icons/sells.svg">Sells</a></li>
               <li><a href="stock.php"><img class="fas"src="icons/stock.svg">Stock</a></li>
               <li><a href="expired.php"><img class="fas"src="icons/expired.svg">Expired Products</a></li>
         </ul> 
         <div class="our_team">
            <ul>
               <li class="ourteam"><a href="ourteam.php"><img src="icons/team.svg" style="width: 25px; padding-right: 5px;">Our Team</i></a></li>
            </ul>
         </div>
      </div>
      <div class="main_content">
         <div class="header">Contacts and Notes</div>

            <!--Contacts and Notes-->
            <!--Contacts-->
            <div class="contact">
               <h2> Contacts </h2>
                  <form method='post'>
                     <div class="info">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="enter name..." required>
                        <label> Email </label>
                        <input type="email" name="email" placeholder="enter email..." required>
                        <br><br>
                        <label>Phone</label>
                        <input type="number" name="name" placeholder="Phone Number" required>
                        <label>Fax</label>
                        <input type="number" name="name" placeholder="Fax" required>
                        <br>
                        <button name="add">ADD</button>
                        <button name="del">Del</button>
                     </div>
                  </form>
                  <table class="contbl">
                     <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Fax</th>
                     </tr>
                     <tr>
                        <td>FedEX</td>
                        <td>fedex@contact.uk</td>
                        <td>+1 234 567 89</td>
                        <td>+ 65656565</td>
                     </tr>
                     <tr>
                        <td>FedEX</td>
                        <td>fedex@contact.uk</td>
                        <td>+1 234 567 89</td>
                        <td>+ 65656565</td>
                     </tr>
                     <tr>
                        <td>FedEX</td>
                        <td>fedex@contact.uk</td>
                        <td>+1 234 567 89</td>
                        <td>+ 65656565</td>
                     </tr>
                     <tr>
                        <td>FedEX</td>
                        <td>fedex@contact.uk</td>
                        <td>+1 234 567 89</td>
                        <td>+ 65656565</td>
                     </tr>
                     <tr>
                        <td>FedEX</td>
                        <td>fedex@contact.uk</td>
                        <td>+1 234 567 89</td>
                        <td>+ 65656565</td>
                     </tr>
                     <tr>
                        <td>FedEX</td>
                        <td>fedex@contact.uk</td>
                        <td>+1 234 567 89</td>
                        <td>+ 65656565</td>
                     </tr>
                     <tr>
                        <td>FedEX</td>
                        <td>fedex@contact.uk</td>
                        <td>+1 234 567 89</td>
                        <td>+ 65656565</td>
                     </tr>
                  </table>
            </div>
            <!-- Notes -->
            <div class="note">
               <h2>Notes</h2>
               <form method='post'>
                  <div class="note-box">
                     <label>Subject</label>
                     <input type="text" name="name" placeholder="enter name..." required> <br>
                     <label>The note</label>
                     <textarea  rows="4" placeholder="note..." required></textarea>
                     <br>
                     <button>ADD</button>
                     <button>Del</button>
                  </div>
               </form>
               <table class="content-table">
                  <tr>
                     <th class="th1">Subject</th>
                     <th>The note</th>
                  </tr>
                  <tr>
                     <td>data </td>
                     <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                  </tr>
                  <tr>
                     <td>data 2</td>
                     <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                  </tr>
               </table>
            </div>
      </div>
</body>
</html>