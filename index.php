
  <?php 
      session_start();

  ?>

  <?php if (isset($_GET['logout']))    {
                          unset($_SESSION['email']);
                          session_destroy();
                           
                  }?>

           

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
          <link rel="stylesheet" href="css/style.css">
         <!---title -->      
          <title>Welcome Food Express Resturant</title>
    </head>

    <body >


            

         
        <nav class="navbar navbar-expand-md navbar-light bg-light  fixed-top">
        <div class="d-flex w-100 order-0">
            <a class="navbar-brand  ">
                <img class="img-thumbnail " id="img" src="img/Foodlogo.jpg"   alt="" /><i class="NewFontTitle ml-2 ">Food Express Resturant</i></a>
            <span class="w-100"></span>
            </div>
             <marquee behavior="scroll" direction="left" class="fast">Food Express Resturant Provides You Multiple Food For Order And Customer Reserve Room</marquee>
            
            </div> 
            </div>           
          </nav>





<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators ">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              
            </ol>
            <div class="carousel-inner role="listbox">
              <div class="carousel-item active">
                <img class="w-100 " src="img/banner.png" alt="First slide">
                    <div class="carousel-caption  ">
                <h2 class="textvist">Welcome to Food Express Resturant..</h2>
                <p class="textvist1">we are welcome you here with our heartly feeling so you can enjoy our services</p>
                <a href="Sign.php" class="btn btn-danger btn-lg btn-rounded mb-4 btn-style " role="button">Login Here</a>
              </div>
              </div>
              <div class="carousel-item ">
                <img class="w-100  " src="img/slider3.jpg" alt="Third slide">
                <div class="carousel-caption ">
                <h2 class="textvist">Welcome to Food Express Resturant..</h2>
                <p class="textvist1">we are welcome you here with our heartly feeling so you can enjoy our services</p>
                <a href="Rooms.php" class="btn btn-danger btn-lg btn-style" role="button">Reserve Room</a>
                
                
              </div>
              </div>
              <div class="carousel-item">
                <img class="w-100  " src="img/slider2.jpg" alt="Third slide">
                  <div class="carousel-caption  ">
                <h2 class="textvist">Welcome to Food Express Resturant..</h2>
                <p class="textvist1">we are welcome you here with our heartly feeling so you can enjoy our services</p>
                <a href="Register.php" class="btn btn-danger btn-lg btn-style " role="button">Registration</a>
              </div>
              </div>

               <div class="carousel-item">
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
          

          

    <div class="imgbg">
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

