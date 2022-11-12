<?php
session_start();

   include("functions.php");

if(isset($_POST['send'])){
   require_once 'mail.php';
   $mail->setFrom('mouafikmohammed03@gmail.com', 'Mohammed Mouafik');
   $mail->addAddress('mohammedmouafik@hotmail.com');
   //$mail->addCC('');
   $mail->Subject = 'Test email';
   $mail->Body    = 'Test from Mohammed <b>PHP Mailer</b>';
   $mail->send();
   header("Location: emails.php", true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/email.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <link rel="icon" type="image/x-icon" href="img/logo.png" />
   <title>Business Management</title>
</head>
<body>
   <div id="background">
      <img src="img/backgroud.jpg" class="stretch" alt="" />
   </div>
   <div class="wrapper">
      <div class="main_content">
         <div class="header"> <a href="index.php"><<<</a>--E-mail</div>


         <div class="contact">
            <h2> Send Email </h2>
            <form method='post' class="row g-3">
               <div class="col-md-8">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="email" required>
               </div>
               <div class="col-md-8">
                  <label for="subject" class="form-label">Subject</label>
                  <input type="text" class="form-control" id="subject" required>
               </div>
               <div class="col-md-12">
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control" id="comments" rows="3" required></textarea>
               </div>
               <div class="col-md-12">
                  <button type="submit" name="send" class="btn btn-primary">Send Email</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</body>
</html>











         <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
         <div class="container mt-5">
            <h1>Contact Me!</h1>
            <form class="row g-3">
               <div class="col-md-6">
                  <label for="firstName" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstName" required>
               </div>
               <div class="col-md-6">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastName" required>
               </div>
               <div class="col-md-8">
                  <label for="emailInfo" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="emailInfo" required>
               </div>
               <div class="col-md-4">
                  <label for="phoneNumber" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" id="phoneNumber" placeholder="+1 (415) 867-5309">
               </div>
               <div class="col-md-12">
                  <label for="comments" class="form-label">Comments, questions?</label>
                  <textarea class="form-control" id="comments" rows="3" required></textarea>
               </div>
               <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </form>
         </div> -->