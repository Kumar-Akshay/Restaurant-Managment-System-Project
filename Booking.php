 <?php 
      session_start();
      include_once('Database/connection.php');
    

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
           
          <title>Welcome Food Express Resturant</title>

  <style>
body{

  /*background-image: url('http://www.birds.com/wp-content/uploads/home/bird4.jpg');*/
  background-image: url("img/BG2.jpg");
  padding-left: 2em;
  padding-right: 5em;
  background-attachment: fixed;
  background-image: cover;
}
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

.NewFontTitle{
  font-family: "akronim";
  color: black;
  font-size: 2rem;

}


.newfont{
  font-family: "Akronim";
    font-weight: bold;
    font-size: 20px;
    letter-spacing: 2px;

}


.btn-sytle{
  border: 2px solid black;
  border-radius: 30px;
  background-color: white;
  color: black;
  padding: 5px 20px;
  font-size: 16px;
  cursor: pointer;
}
.btn-primary:hover{
  background-color: #4CAF50;
  color: white;
}

h1{
  text-align: left;
  font-family: "Akronim";
  font-weight: bold;
  letter-spacing: 4px;
  text-decoration: underline;
  color: black;
  margin-left: 40px;

}



.modal-content{
  box-sizing: border-box;
  width: 100%;
    border: 10px solid black;
    margin-top: 10%;   
              }

.modal-content a{
  color: black;
  border: 4px solid black;
                }

.margins1{
  margin-top: 10%;
              }

.table th{
  font-family: "Akronim";
  letter-spacing: 2.5px;
  font-size: 18px;
  color: red;
}
.table td{
  font-family: "Akronim2";
  letter-spacing: 1.5px;
  font-size: 18px; 
}

.input-wrapper {
   
   
    font-size: 18px;
    height: 52px;
    width: 20em;
    border: 4px solid red;
    border-radius: 5px;
    letter-spacing: 2px;
    padding-left: 4px;
    margin-top: 8px;
    margin-left: 3em;


}


  </style>

    </head>
    <body>
       <nav class="navbar navbar-expand-md navbar-light bg-light  fixed-top">
          <div class="d-flex w-100 order-0">
        <div class="w-100">
                
        <a class="navbar-brand  ">
        <img  src="img/Foodlogo.jpg"  width="90" height="50"  alt="" /><i class="NewFontTitle ml-2 ">Food Express Resturant</i></a>
        </div>
        <span class="w-100"></span>
         
       
        <span class="w-100">  
         <a class="btn btn-primary ml-5 mt-2 btn-sytle newfont" href="#orerNow" role="button"><strong><h4>Log out &rarr;</h4></strong> </a>
        </span>
        
        
        </div>
        </nav>
        

     


                  <div style="margin-top: 7em;" >
              <h1  style="margin-left: 11em; font-size: 2.8em; color: black " >Welcome Admin </h1>
              <?php if (isset($_SESSION['email'])  ): ?>
           <span class="w-100 Setuser d-none d-xl-block mt-3"><h5 style=" margin-left: 20em;  box-sizing: border-box; ">
            <i class="fa fa-user  text-dark"></i> <?php echo $_SESSION['email']; ?></h5></span>
                     <?php endif ?>
              <h1 style="margin-left: 11em; font-size: 2.8em; color: darkorange; margin-top: 1em; " >Rooms Booking Details</h1>
    
            </div>   
  


          <div class="row">
            <div class="col-md-4 ">
          <div class="container ml-5">
          <div class="modal-dialog text-center" >
            <div class="row">
              <div class="col-md-12">
          <div class="col-md-9  " >
              <div class="modal-content ">
                  <a href="Foodetails.php" class="btn-warning    btn-lg mb-3 mt-3 ml-2 mr-2 fooddeatils">Foods Details</a>
                  <a href="FoodOrders.php" class="btn-warning  btn-lg mb-3 ml-2 mr-2" >Foods Ordering</a>
                  <a href="RoomDetails.php" class="btn-warning btn-lg mb-3 ml-2 mr-2" >Rooms Details</a>
                  <a href="Booking.php" class="btn-warning active btn-lg mb-3 ml-2 mr-2" >Room Booking</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>



      
    <div class="col-md-8 ">
             <div class="myText">
              <div class="table-responsive  mt-5">
                  <table class="table table-bordered table-dark table-info table-hover  ">
                    <tr>
                      <th width="10%"> Booking No</th>
                      <th width="10%"> Room No</th>
                      <th width="15%"> Customer Name</th>
                      <th width="15%"> Arrival Date</th>                      
                      <th width="15%"> Departure Date</th>
                    </tr>
                      <?php 
                      $sql = "SELECT * FROM Booking ORDER BY BOOKING_NO ASC ";
                      $res = mysqli_query($conn,$sql);
                  if( mysqli_num_rows($res) > 0 ){
                      while($r=mysqli_fetch_assoc($res)){
                      ?>
                        <?php 
                      echo "<tr>";
                      echo "<td> <strong>".$r['BOOKING_NO']."</strong></td>";
                      echo "<td> <strong>".$r['ROOM_NO']."</strong> </td>";
                      echo "<td> <strong>".$r['CUSTOMER_NAME']."</strong> </td>";
                      echo "<td> <strong>".$r['ARRIVAL_DATE']."</strong></td>";
                      echo "<td> <strong>".$r['DEPARTURE']."</strong></td>";
                      
                      }
                      } ?>


                  </table>
                </div>

             </div>

    </div>




    


          
        
        
</body>
</html>


    