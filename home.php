
  <?php 
      session_start();

      if (!isset($_SESSION['email']) ) {
          header('Sign.php');
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
            <link rel="stylesheet" href="css/homecss.css">
            <style>
              
              .Setuser {
                margin-top: 10px;
               
              }

              .Setuser h5 {

                font-size: 1.5em;
                color: darkorange;
                display: inline-block;
               width: 70%;
                padding-top: 5px; 
                padding-left: 15px;
                border-radius: 20px;
                font-family: "Akronim";
                font-weight: bold;
                

                    }
            </style>
          <!---title -->      
          <title>Welcome Food Express Resturant</title>
    </head>

    <body >


            

         
        <nav class="navbar navbar-expand-md navbar-light bg-light  fixed-top">
        <div class="d-flex w-100 order-0">
        <div class="w-100">
                <button class=" mt-3 mr-1 navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
                </button>
                </div>          
                <a class="navbar-brand  ">
                <img class="img-thumbnail " id="img" src="img/Foodlogo.jpg"   alt="" /><i class="NewFontTitle ml-2 ">Food Express Resturant</i></a>
                  
            <span class="w-100"></span>
            </div>
            <span class="w-100"></span>
                   <?php if (isset($_SESSION['email'])  ): ?>
                <span class="w-100 Setuser d-none d-xl-block"><h5><i class="fa fa-user  text-dark"></i> <?php echo $_SESSION['email']; ?></h5></span>
                     <?php endif ?>
                <span class="w-100"></span>   
               <div class="collapse navbar-collapse w-100 order-1 order-lg-0 text-center " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active ">
                        <a class="nav-link active font-weight-bold fast " href="home.php" >Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  font-weight-bold fast " href="Menu.php">Menu's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold fast" href="Rooms.php">Room</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link font-weight-bold fast " href="#">Contact </a>
                    </li>
                </ul>
                <span class="w-100 Setusers d-none d-xl-block"><h4>  </h4></span>
                     <?php if (isset($_SESSION['email'])): ?>
                <a class="btn btn-outline-primary ml-5  btn-style " href="index.php?logout='1'" role="button">Logout&rarr;</a>
               
                      <?php endif ?>        
                  <a class="btn btn-outline-danger ml-2 " href="Menu.php#orderNow" role="button">Order Now &rarr;</a>

                <!-- <span class="w-100 mb-3 Setuser  d-sm-none"><h4 class="mt-3 pr-1"> .php#orderNow  </h4></span> -->



            </div> 
          </nav>





<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
            </ol>
            <div class="carousel-inner role="listbox">
              <div class="carousel-item active ">
                <img class="w-100  " src="img/slider2.jpg" alt="Third slide">
                <div class="carousel-caption ">
                <h2 class="textvist">Welcome to Food Express Resturant..</h2>
                <p class="textvist1">we are welcome you here with our heartly feeling so you can enjoy our services</p>
                <a href="Rooms.php" class="btn btn-danger btn-lg btn-style" role="button">Reserve Room</a>
                
                
              </div>
              </div>

              <div class="carousel-item ">
                <img class="w-100  " src="img/slider4.jpg" alt="Third slide">
                  <div class="carousel-caption  ">
                <h2 class="textvist">Welcome to Food Express Resturant..</h2>
                <p class="textvist1">we are welcome you here with our heartly feeling so you can enjoy our services</p>
                <a href="Sign.php" class="btn btn-danger btn-lg btn-style " role="button">Order Now</a>
              </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>
          

          

    <div class="imgbg" style="background-image:  url(./img/BG2.jpg);">
       <section class="container text-center ourservices text-gray-dark">
          <h1>SERVICES</h1>
          <p>Here you see our services which we are providing you!</p>

          <div class="row rowsetting">
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
            <div class="imgsetting d-block m-auto btn-danger">
            <i class="fa fa-home fa-3x text-white"></i></div>
            <h2>Home Delivery</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna</p></div>

         <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto ">
            <div class="imgsetting d-block m-auto btn-danger">
            <i class="fa fa-cc-visa fa-3x text-white"></i></div>
            <h2 >Pay Via Visa</h2>
            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna</p></div>
         

          <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
            <div class="imgsetting d-block m-auto btn-danger">
            <i class="fa  fa-location-arrow fa-3x text-white"></i></div>
            <h2>Home Delivery</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna</p></div>
         
       </div>
       </section>
     </div>

    

     <script src="js/scripts.min.js"></script>
     <script src="js/main.min.js"></script> 

    </body>       
  
</html>

