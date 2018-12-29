<?php 
  
     session_start();
      include_once('Database/connection.php');
    

      if (isset($_POST['Adminclick'])) {
         $email = mysqli_real_escape_string($conn, $_POST['email']);
         $password = mysqli_real_escape_string($conn, $_POST['password']);

         $sql="SELECT ADMIN_EMAIL, ADMIN_PASSWORD FROM admin WHERE ADMIN_EMAIL='$email' AND ADMIN_PASSWORD='$password'";
         $result = mysqli_query($conn,$sql);  
         if (mysqli_num_rows($result) == 1) {
                  $_SESSION['email']=$email;
                     $save=mysqli_fetch_assoc($result);
                     $id=$save['ITEM_NO'];
                     $_SESSION['email']=$email;
                     $_SESSION['ID']=$id;
                    header('location: Foodetails.php');  
                    }
            else{
                    header('location: Admin.php');
            }
          }
        




 ?>




<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                 
      <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <!-- jQuery library -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Popper JS -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript and datepicker -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
               <!-- font awesome libaray-->  
               <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!---css include in php -->
          <link rel="stylesheet" href="css/AdminStyle.css">
          <link rel="stylesheet" href="js/Admin.js">
         <!---title -->      
          <title>Welcome Food Express Resturant</title>
    </head>
    <body>
       <nav class="navbar navbar-expand-md navbar-light bg-light  fixed-top">
          <div class="d-flex w-100 order-0">
        <div class="w-100">
                
        <a class="navbar-brand  ">
        <img  src="img/Foodlogo.jpg"  width="90" height="50"  alt="" /><i class="NewFontTitle ml-2 ">Food Express Resturant</i></a>
        
        <span class="w-100"></span>
        <span class="w-100"></span>
        <span class="w-100"></span>
            </div>
          </div>
          
            </nav>

                  
        <div class="modal-dialog text-center " >
          <div class="col-md-9  main-section" >
              <div class="row">
                <div class="col-6">
                  <h1 >Login </h1></div>
                <div class="col-6">
                  <h1>Admin</h1>
                </div>
              </div>
            
                <div class="modal-content">
                <div class="col-md-12 user-img">
                <img src="img/lock.png">
                </div>  
      
               <form action="Admin.php" method="post" >
                <div class="col-12 form-input">
                <div class="form-group" >
                <label class="text-white font-weight-bold" for="Email">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter E-mail " value="">
                </div>
                <div class="form-group">
                <label class="text-white font-weight-bold" for="Password">Password</label>
                <input type="password" required="" class="form-control" name="password" placeholder="Enter password">
                </div>
                <button type="submit" required="" class="btn  btn-outline-success font-weight-bold " name="Adminclick">Login </button>
                </div>
                </form>
                </div>
                </div>
                </div>


              


  
        
</body>
</html>


    