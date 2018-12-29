<?php
// Start the session

 include_once('Database/connection.php');
 session_start();    

   
?>


<!DOCTYPE html>
<html>
<head>
	      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      

                 
      <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <!-- jQuery library -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Popper JS -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
          <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
       <!-- font awesome libaray-->  
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <!---css -->
          <link rel="stylesheet" href="css/stylesign.css">
            

	<title></title>
  
</head>
<body>
  



                <?php 

      $email="";
      $password="";    
      $check =  array();

      //if login btn clicl
     if (isset($_POST['Loginclick'])) {
         $email = mysqli_real_escape_string($conn, $_POST['email']);
         $password = mysqli_real_escape_string($conn, $_POST['password']);


        //Ensure feilds are filled properly
    if (empty($email)) {
        array_push($check, "Email is Required");
    }

    if (empty($password)) {
        array_push($check, "Password is Required");
        }

    //if no error found
    if (count($check) == 0) {
       // $epassword = md5($password);
      $sql = "SELECT CID ,EMAIL,PASSWORD FROM  customer Where Email='$email' AND  password='$password'";
      $result = mysqli_query($conn,$sql);  
      if (mysqli_num_rows($result) == 1) {
      
          $save=mysqli_fetch_assoc($result);
                  $id=$save['CID'];
                  $_SESSION['email']=$email;
                  $_SESSION['ID']=$id;
                  header('location: home.php');  
                    }
            else{
              array_push($check, "Incorect combination of Email and Password");
                    header('location: Sign.php');
            }
          }
        }

           ?>

	
    

          
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

                  
        <div class="modal-dialog text-center" >
          <div class="col-md-9  main-section" >
              <div class="row">
                <div class="col-6">
                  <h1 >Login </h1></div>
                <div class="col-6">
                  <h1>Here</h1>
                </div>
              </div>
            
                <div class="modal-content">
                <div class="col-md-12 user-img">
                <img src="img/lock.png">
                </div>  
      
               <form action="Sign.php" method="post" >
                <?php include('errors.php') ?>

                <div class="col-12 form-input">
                <div class="form-group" >
                <label class="text-white font-weight-bold" for="Email">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter E-mail " value="<?php echo $email ?>">
                </div>
                <div class="form-group">
                <label class="text-white font-weight-bold" for="Password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-outline-success font-weight-bold" name="Loginclick">Login</button>
                </div>
                </form>
                <div class="row">
                <div class="col-md-6  forget mb-3">
                <a class="text-center " href="Register.php">Register Now</a>
                </div>
                <div class="col-md-6  forget mb-3">
                <a class="text-center " href="Admin.php">Login As Admin</a>
                </div>

                </div>

                </div>
                </div>
                </div>


              


  
	      
</body>
</html>