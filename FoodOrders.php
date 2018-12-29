 <?php 
      session_start();
      require('Database/connection.php');
    


          if (isset($_POST['Add'])) {
              $Name =mysqli_real_escape_string($conn,$_POST['ItemName']);
              $Cheif =mysqli_real_escape_string($conn,$_POST['CheifName']);
              $Qty =mysqli_real_escape_string($conn,$_POST['Qunatity']);
              $Price =mysqli_real_escape_string($conn,$_POST['price']);
              $Status =mysqli_real_escape_string($conn,$_POST['status']);


    $sql = "INSERT INTO fooddetails (ItemName,CheifName,Quantiy,Status,Price) VALUES ('$Name','$Cheif','$Qty','$Status','$Price')";
                
               $result = mysqli_query($conn,$sql);
              
            if ($result) {
            $message = "Your Succesfully Details Inserted ";
            echo "<script type='text/javascript'>alert('$message');</script>";
              header("loaction: AdminStatus.php");
            }
          }

      
      if (isset($_GET["action"])) {
            if ($_GET["action"] == "delete") {
            $id=$_GET["id"];
            $sql= "DELETE FROM fooddetails WHERE ID='$id'";
            $res = mysqli_query($conn,$sql) or die("Failed".mysql_errno());
            echo "<meta http-equiv='refresh' content='0; url=AdminStatus.php'>";
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
         <!---title -->      
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
    margin-top: 40%;   
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
  letter-spacing: 1.5px;
  font-size: 18px;
  color: red;
}
.table td{
  font-family: "Akronim";
  letter-spacing: 1.5px;
  font-size: 18px; 
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
         <?php if (isset($_SESSION['email'])  ): ?>
           <span class="w-100 Setuser d-none d-xl-block mt-3"><h5><i class="fa fa-user text-dark"></i> <?php echo $_SESSION['email']; ?></h5></span>
                     <?php endif ?>
       
        <span class="w-100">  
         <a class="btn btn-primary ml-5 mt-2 btn-sytle newfont" href="#orerNow" role="button"><strong><h4>Log out &rarr;</h4></strong> </a>
        </span>
        
        
        </div>
        </nav>
        


            <div  style="margin-top: 7em; ">
              <h1 class="text-center" style="font-size: 2.8em; color: black " >Welcome Admin </h1>
                 <?php if (isset($_SESSION['email'])  ): ?>
           <span class="w-100 Setuser d-none d-xl-block mt-3"><h5 style=" margin-left: 20em;  box-sizing: border-box; ">
            <i class="fa fa-user  text-dark"></i> <?php echo $_SESSION['email']; ?></h5></span>
                     <?php endif ?>
           
              <h1  class="text-center" style="font-size: 2.8em; color: darkorange; margin-top: 1em; " >Foods Ordering Details</h1>
    
            </div>   

        <div class="row">
            
            <div class="col-md-4  ">
          <div class="container ml-2">
          <div class="modal-dialog text-center" >
            <div class="row">
              <div class="col-md-10">

         
            
                <div class="modal-content " style="margin-top: 3em;">

                   <a href="Foodetails.php" class=" btn-success  btn-lg mb-3 mt-3 ml-2 mr-2 "  >Foods Details</a>
                  <a href="FoodOrders.php" class="btn-success  active btn-lg mb-3 ml-2 mr-2" >Foods Ordering</a>
                  <a href="RoomDetails.php" class="btn-success  btn-lg mb-3 ml-2 mr-2" >Rooms Details</a>
                  <a href="Booking.php" class="btn-success  btn-lg mb-3 ml-2 mr-2" >Room Booking</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>


      

          
    <div class="col-md-8" style="margin-top: 2em;">

             <div class="myText">
              <div class="table-responsive mt-5 ">
                  <table class="table table-bordered table-dark table-info table-hover  ">
                    <tr>
                      <th width="10%"> Order No</th>
                      <th width="10%"> Item Name</th>
                      <th width="10%"> Quantity</th>
                      <th width="10%"> Total Price</th>
                      <th width="10%"> Date</th>
                      <th width="10%"> Customer ID</th>
                      
                    </tr>
                     <?php 
                      $sql = "SELECT * FROM orderdetails ORDER BY ORDER_NO ASC ";
                      $res1 = mysqli_query($conn,$sql);
                  if( mysqli_num_rows($res1) > 1 ){
                      while($r = mysqli_fetch_assoc($res1)){
                      ?>
                        <?php 
                      echo "<tr>";
                      echo "<td> <strong>".$r['ORDER_NO']."</strong></td>";
                      echo "<td> <strong>".$r['ITEM_NAME']."</strong> </td>";
                      echo "<td> <strong>".$r['QUANTITY']."</strong></td>";
                      echo "<td> <strong>".$r['PRICE']."</strong></td>";
                      echo "<td> <strong>".$r['Date']."</strong></td>";
                      echo "<td> <strong>".$r['CID']."</strong></td>";
                      
                      

                      }
                      } ?>

                  </table>
                </div>

             </div>

    </div>
        
</body>
</html>


    