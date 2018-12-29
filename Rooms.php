<?php 
session_start(); 
include_once('Database/connection.php');
?>

<?php 
                $records= array();
                 $i=0;
        
        $sql ="SELECT * FROM ROOMS ORDER BY ROOM_NO ASC";
        $res=mysqli_query($conn,$sql);
         $rows=mysqli_num_rows($res);
        if (mysqli_num_rows($res) > 0 ) {
            while ($row = mysqli_fetch_assoc($res)) {
               $records[]=$row;
            }
          }
        else{
          echo "faild";
          exit();
        }

 

    if (isset($_POST['ReserveNow'])) {
        
         $Rno = mysqli_real_escape_string($conn, $_POST['rno']);
         $Arrival = mysqli_real_escape_string($conn, $_POST['arrival']);
         $Departure = mysqli_real_escape_string($conn, $_POST['departure']);
         $email=$_SESSION['email'];
         $sql= "SELECT FNAME FROM CUSTOMER WHERE EMAIL = '$email'";
            $result1 = mysqli_query($conn,$sql);
            if ($result1 == true) {
            $STORE =mysqli_fetch_assoc($result1);
            $name =$STORE['FNAME'];
                                  }
            else{
                echo "Fails Query";
                exit();
                }

              
        $sql="SELECT * FROM ROOMS";
        $result = mysqli_query($conn,$sql);
        if ($result==true) {
        $save =mysqli_fetch_assoc($result);
        $rnos=$save['ROOM_NO'];}

        if ($rnos === $Rno) {
        $sqli="INSERT INTO `booking`(`ROOM_NO`, `CUSTOMER_NAME`, `ARRIVAL_DATE`, `DEPARTURE`)
        Values('$Rno','$name','$Arrival','$Departure')";
        $result1 = mysqli_query($conn,$sqli);
        if ($result1==true) {
        $message = "Succesfully Booking Done";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("loaction: Rooms.php");
              }
        else{
                echo "Faild ";
                echo $Rno;
                echo $name;
                echo $Arrival;
                echo $Departure;
                exit();
            }
          }
                
                  else{
                    $message = "Invalid Room No Booking Falid";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("loaction: Rooms.php");
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
      <!---css -->
             <link rel="stylesheet" href="css/datepicker.css">
          <link rel="stylesheet" href="css/RoomStyle.css">

         
          <style>
            <style>
                 
        .username{
              text-decoration-color:red;
              text-decoration-color: red;
        }
        
        
          </style>
        <!---title -->      
          <title>Welcome Food Express Resturant</title>
    </head>

    <body  style=" background-image: url(./img/room/rooms1.jpg);">
      
       <nav class="navbar navbar-expand-md navbar-light bg-light  fixed-top">
                    <div class="d-flex w-100 order-0">
                  <div class="w-100">
                          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav">
                          <span class="navbar-toggler-icon"></span>
                          </button>
                  </div>          
                  <a class="navbar-brand  ">
                  <img  src="img/Foodlogo.jpg"  width="90" height="50"  alt="" /><i class="NewFontTitle ml-2 ">Food Express Resturant</i></a>
                  <span class="w-100"></span>
                          
                      </div>
                      <span class="w-100"></span>
                       <?php if (isset($_SESSION['email'])): ?>
                <span class="w-100   d-none d-xl-block"><h4 style="font-family: akronim; font-size: 1.5em; display: inline-block; color: darkorange;font-weight: bold; text-decoration-line: underline;"> 
                  <i class="fa fa-user text-dark"></i> <?php echo $_SESSION['email']; ?></h4></span>
                  
                     <?php endif ?>
                      <div class="collapse navbar-collapse w-100 order-1 order-lg-0 text-center " id="navbarNav">
                          <ul class="navbar-nav">
                              <li class="nav-item  ">
                                  <a class="nav-link  font-weight-bold newfont" href="home.php">Home</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link font-weight-bold  newfont" href="Menu.php">Menu's</a>
                              </li>
                              <li class="nav-item active">
                                  <a class="nav-link active font-weight-bold  newfont" href="Rooms.php">Rooms</a>
                              </li>
                              <li class="nav-item font-weight-bold  newfont"> 
                                <a class="nav-link " href="#">Contact</a>
                              </li>
                          </ul>
                          <a class="btn btn-outline-primary ml-5 btn-sytle " href="#Reserve" role="button">Reserve Now&rarr;</a>
                      </div>
                    </nav>
       
                  
                      <section class="Main_section">
                  <h1>Welcome To Rooms Reservation</h1>
                <div class="container">
                  <div class="row ">
                   <?php  
                         
                         while($i < $rows){
                   ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 mt-sm-3 mt-md-3 mt-xl-3">
                      <div class="room">
                        <a href="#"><img src="<?php echo $records[$i]['ROOM_PIC'] ?>"  alt="" "></a>
                        <div class="text">
                          <h3> <?php echo $records[$i]['ROOM_NO']."->" ; ?> <?php  echo $records[$i]['ROOM_NAME']; ?></h3>
                          <p>Starting From <strong> <?php  echo "$".$records[$i]['PRICE']."/Night"; ?></strong></p>
                          <div class="post-meta ">
                            <ul>
                              <li><span class="review-rate fa fa-star"><?php echo " ".$records[$i]['RATING']; ?></span> 
                                <i class="fa fa-star "></i> <?php  echo $records[$i]['REVIEWS']." Reviews"; ?> </li>
                              <li><i class="fa fa-user"></i> <?php echo $records[$i]['GUEST_CAPACITY']." Guest"; ?></li>
                            </ul> 
                          </div>
                            <a href="#Reserve" class="btn btn-primary mt-3" name="submit">Reserve now  <?php echo "Room No ".$records[$i]['ROOM_NO']; ?></a>
                        </div>
                        </div>
                    </div>
                        <?php 
                        $i++;
                        }
                         ?>
                        
                </div>
                </div>
              </section>

                      








                    <!-- Reservation and Oder online-->
          <div class="body1">
          <div class="container ">
            <div class="row">
                    <!--colum 1-->
                    <div class="col-md-6  col-sm-6" id="Reserve">
                      <h1 class="text-center mt-5 text-monospace font ">Reservation of Rooms</h1>
                      <div class="modal-content">
                      <form action="Rooms.php" method="post">
                      
                      <div class="col-md-12 mt-3 text-center"> 
                      <label for="">Room Number</label>
                      <input type=" text" required="" class="form-control"  style="margin-left: 7em; width: 15em;" name="rno" placeholder="Room No">
                      </div>                   
                      
                      <div class="col-md-12 mt-3 text-center"> 
                        <label for=""> Arrival date</label>
                        <input type="date" required="" class="form-control" style="margin-left: 7em; width: 15em;" id="date-arrival" name="arrival" placeholder="Date of Arrival">
                      </div> 

                       <div class="col-md-12 mt-3 text-center"> 
                        <label for="">Departure Date</label>
                        <input type="date" required="" class="form-control" style="margin-left: 7em; width: 15em;" id="date-arrival" name="departure" placeholder="Date of Arrival">
                      </div> 
                      <button type="submit" class="btn btn-warning  mt-4 mb-3" name="ReserveNow" style="margin-left: 12em;">Reserve Now</button>



                       
                          </form>                   
                        </div>
                        </div>


                    
                    <!--colum 2-->
                      <div class="col-md-6 col-sm-6 new">
                       <h1 class="text-center mt-5  font">Rooms Services</h1>
                          <img class=" rseize" src="img/rooms.jpg" alt="" width="90%"" height="50%">

                          <p class="marginleft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque, dolorem possimus error suscipit quae iusto ullam reprehenderit nobis perferendis, sunt ex, rem maxime aut praesentium facilis velit repellat nostrum!</p>
                       </div>
                   
            </div>
            </div>
            </div>














        <div class="container">
        <div class="row rows">
        <div class="col-md-12 text-center">
          <h2 >Why Choose Us?</h2>
          <p class="mb50"><img src="img/curve.svg" class="svg"></p>
        </div>
          <div class="col-md-4">
             <div class="settext">
              <h3>1+ Million Hotel Rooms</h3>
              <p class="col-md-10 ml-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>

          <div class="col-md-4">
             <div class="settext">
              <h3>Food & Drinks</h3>
              <p class="col-md-10 ml-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>

          <div class="col-md-4">
             <div class="settext">
              <h3>Enviroment</h3>
              <p class="col-md-10 ml-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>


    </div>
  </div>


<script>  
 <script src="js/scripts.min.js"></script>
            <script src="js/main.min.js"></script> 

</script>








        </body>
        </html>

