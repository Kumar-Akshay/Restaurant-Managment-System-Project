 <?php 
      session_start();
       require('Database/connection.php');
     
                  ?>
  <?php 

      if (isset($_POST['submit'])) {
         $No = mysqli_real_escape_string($conn, $_POST['code']);
         $qty = mysqli_real_escape_string($conn, $_POST['qty']);
        
         $sql ="SELECT ITEM_NO ,ITEM_NAME ,QUANTITY ,PRICE,AVAILBILITY FROM foodsdetails WHERE ITEM_NO='$No'";
                $result = mysqli_query($conn,$sql);
                if ($result == true) {
                 $save =mysqli_fetch_assoc($result);
                  $qtys=$save['QUANTITY'];
                  $nos=$save['ITEM_NO'];
                  $name=$save['ITEM_NAME'];
                  $price=$save['PRICE'];
                  $email=$_SESSION['email'];

           if ($nos===$No) {
           $sql1= "SELECT CID FROM CUSTOMER WHERE EMAIL = '$email'";
                 $result1 = mysqli_query($conn,$sql1);
                 if ($result1 == true) {
                  $save1 =mysqli_fetch_assoc($result1);
                  $cid =$save1['CID'];
                  $pay1=$price*$qty;
               }
               else{

               }
           $sql="INSERT INTO orderdetails (ITEM_NAME,QUANTITY,PRICE,CID)VALUES('$name','$qty','$pay1','$cid')";
                 $result=mysqli_query($conn,$sql);
                 if ($result==true) {
                 header('location: home.php'); 
                 }
                 else{
                 echo "string";
                 }    
             }

              else{
              $message = "Item Code is Invaild  Enter Anothor Item Code";
              echo "<script type='text/javascript'>alert('$message');</script>";
              header("loaction: Menu.php");
             }
              }

               }
    //form subbmisson
       
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
      <!-- Latest compiled JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
       <!-- font awesome libaray-->  
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                       <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
      <!---css -->
           <link href="css/MenuStyle.css" media="all" rel="stylesheet" type="text/css""> 
          <link rel="stylesheet" href="css/datepicker.css">
            <style>

.Setuser {
       margin-top: 10px;}

.Setuser h4 {
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
  
.tab{
    padding: 5px 5px 5px;
    
}
                          
            
            </style>
          
          <!---title -->      
          <title>Welcome Food Express Resturant</title>
    </head>

    <body >




        
        <nav class="navbar navbar-expand-md navbar-light bg-light  fixed-top">
          <div class="d-flex w-100 order-0">
        <div class="w-100">
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
                </button>
        </div>          
        <a class="navbar-brand  ">
        <img  class="img-thumbnail" src="img/Foodlogo.jpg"  width="90" height="50"  alt="" /><i class="NewFontTitle ml-2 ">Food Express Resturant</i></a>
        <span class="w-100"></span>
                
            </div>
            <span class="w-100"></span>
             <?php if (isset($_SESSION['email'])): ?>
                <span class="w-100 Setuser d-none d-xl-block"><h4> <i class="fa fa-user text-dark"></i> <?php echo $_SESSION['email']; ?></h4></span>
                     <?php endif ?>
            <div class="collapse navbar-collapse w-100 order-1 order-lg-0 text-center " id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item ">
                      <a class="nav-link  font-weight-bold  fast " href="home.php"  >Home</a>
                  </li>
                  <li class="nav-item  active ">
                        <a class="nav-link font-weight-bold fast  active " href="Menu.php" >Menu's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold fast" href="Rooms.php" >Rooms</a>
                    </li>
                    <li class="nav-item font-weight-bold fast  ">
                        <a class="nav-link " href="#" >Contact</a>
                    </li>
                </ul>
                <a class="btn btn-primary ml-5 btn-sytle newfont " href="#orderNow" role="button">Order Now &rarr;</a>
            </div>
          </nav>

          <!--menu-->
           <section class="Main_section">
                  <h1>Our Resturant's Menu</h1>
            <div class="container ">
              <div class="row rows">
                
                            

                    <div class="col-sm-6 col-md-4 mt-sm-3 mt-md-3 mt-xl-3" >
                              <div class="food">
                                <a ><img src="img/row1.jpg"  alt=""></a>
                                <div class="text">
                                  <h3>Chicken Karhi</h3>
                                </div>
                                </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mt-sm-3 mt-md-3 mt-xl-3">
                              <div class="food">
                                <a ><img src="img/row2.jpg"  alt=""></a>
                                <div class="text">
                                  <h3>Chicken Broast</h3>
                                </div>
                                </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mt-sm-3 mt-md-3 mt-xl-3">
                              <div class="food">
                                <a ><img src="img/row9.jpg"  alt=""></a>
                                <div class="text">
                                  <h3>Chicken Burger</h3>
                                </div>
                                </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mt-sm-3 mt-md-3 mt-xl-3">
                              <div class="food">
                                <a ><img src="img/row4.jpg"  alt=""></a>
                                <div class="text">
                                  <h3>Special Naan</h3>
                                </div>
                                </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mt-sm-3 mt-md-3 mt-xl-3">
                              <div class="food">
                                <a ><img src="img/row5.jpg"  alt=""></a>
                                <div class="text">
                                  <h3>Special Raita</h3>
                                </div>
                                </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mt-sm-3 mt-md-3 mt-xl-3">
                              <div class="food">
                                <a ><img src="img/row6.jpg"  alt=""></a>
                                <div class="text">
                                  <h3>Chola Biryani</h3>
                                </div>
                                </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mt-sm-3 mt-md-3 mt-xl-3">
                              <div class="food">
                                <a ><img src="img/row4.jpg"  alt=""></a>
                                <div class="text">
                                  <h3>Chicken Boneless</h3>
                                </div>
                                </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mt-sm-3 mt-md-3 mt-xl-3">
                              <div class="food">
                                <a ><img src="img/row5.jpg"  alt=""></a>
                                <div class="text">
                                  <h3>Chicken Malai Boti</h3>
                                </div>
                                </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mt-sm-3 mt-md-3 mt-xl-3">
                              <div class="food">
                                <a ><img src="img/row6.jpg"  alt=""></a>
                                <div class="text">
                                  <h3>Chicken Biryani</h3>
                                </div>
                                </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mt-sm-3 mt-md-3 mt-xl-3">
                              <div class="food">
                                <a ><img src="img/row4.jpg"  alt=""></a>
                                <div class="text">
                                  <h3>Chicken Rice</h3>
                                </div>
                                </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mt-sm-3 mt-md-3 mt-xl-3">
                              <div class="food">
                                <a ><img src="img/row5.jpg"  alt=""></a>
                                <div class="text">
                                  <h3>Vegetable Rice</h3>
                                </div>
                                </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mt-sm-3 mt-md-3 mt-xl-3">
                              <div class="food">
                                <a ><img src="img/row6.jpg"  alt=""></a>
                                <div class="text">
                                  <h3>EGG RICE</h3>
                                </div>
                                </div>
                    </div>

            
                          



              </div>
            </div>
          </section>

              <div class="container Back  " id="orderNow" >
                <div class="row">
                   <div class="col-md-6 mt-5 col-sm-6" >
                      <h1 class="text-center mt-5 text-monospace font " >Order Now!!</h1>
                      <div class="modal-content">
                <form action="Menu.php"  method="post">
                      <div class=" form-row m-2 mt-2 mb-2">
                      <div class="form-group col-md-6 email"> 
                      <label for="Code">Item Code</label> 
                      <input type="text" required="" name="code" class="form-control" id="inputEmail4">
                      </div>

                      <div class="form-group col-md-6 email"> 
                      <label for="Code">Quantity</label> 
                      <input type="text" required="" name="qty" class="form-control" id="inputEmail4">
                      </div>
                      
                      </div>
                      <div class="form-row m-2 mt-0">
                        
                      
                          <div class=" mt-4 mb-3 btn btn ">
                          <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Order it.">
                          </div>  
                          </div>
                </form>                   
                          </div>
              </div>

              <div class="col-md-6 col-sm-6 mt-5">
                <h1 class="text-center mt-5  text-monospace font">Here So Many Foods</h1>
                  <div class="modal_content">
                    <div class="table-responsive">
                  <table class="table table-bordered table-dark table-info table-hover ">
                    <tr>
                      <th width="25%" class="text-white newfont"> Item Name</th>
                      <th width="10%" class="text-white newfont"> Item Code</th>
                      <th width="25%" class="text-white newfont"> Cheif Name</th>
                      <th width="15%" class="text-white newfont"> Price</th>
                      </tr>
              <?php 
                      $sql = "SELECT * FROM foodsdetails ORDER BY ITEM_NO ASC ";
                      $res = mysqli_query($conn,$sql);
                  if( mysqli_num_rows($res) > 0 ){
                      while($r = mysqli_fetch_assoc($res)){
                      ?>
                      <div class="text-white">
                        <?php 
                      echo "<tr>";
                      echo "<td> <strong>".$r['ITEM_NAME']."</strong></td>";
                      echo "<td> <strong>".$r['ITEM_NO']."</strong> </td>";
                      echo "<td> <strong>".$r['CHEIF_NAME']."</strong> </td>";
                      echo "<td> <strong>".$r['PRICE']."</strong></td>";
                       ?>
                      </div>
                      
                      <?php 
                      }
                        } 
                  else{
                    echo "Failed";
                  }
                ?>
                  </table>
                </div>

                  </div>
              </div>
              



                </div>

              </div>

          

          <div class="container">
        <div class="row rows">
        <div class="col-md-12 text-center">
          <h2 >Why Choose Our Food?</h2>
          <p class="mb50"><img src="img/curve.svg" class="svg"></p>
        </div>
          

          <div class="col-md-4">
             <div class="settext">
              <h3>Food & Drinks</h3>
              <p class="col-md-10 ml-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>

          <div class="col-md-4">
             <div class="settext">
              <h3>Enviroment</h3>
              <p class="col-md-10 ml-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>

           <div class="col-md-4">
             <div class="settext">
              <h3>Food & Drinks</h3>
              <p class="col-md-10 ml-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>




    </div>
  </div>

       



        
                 
                 



           




</body>
</html>
