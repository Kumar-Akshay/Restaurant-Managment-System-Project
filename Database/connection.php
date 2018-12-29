<?php
$servername = "localhost";
$username = "root";
$password = "";
$dname = "resturantDatabase";

// Create connection
$conn = mysqli_connect($servername, $username,$password,$dname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// //Create Database
// 	$sql="Create Database  resturantDatabase";
// 	if($conn->query($sql) === TRUE){
// 		echo "Database successfully Created";
// 	}
// 	else{
// 		echo "Falid To Creating Database" .$conn->error;
// 	}


// sql to create table
// $sql = "CREATE TABLE CUSTOMER (
// 								CID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// 								FNAME VARCHAR(30) NOT NULL,
// 								LNAME VARCHAR(30) NOT NULL,
// 								EMAIL VARCHAR(255) UNIQUE,
// 								PASSWORD VARCHAR(50) NOT NULL,
// 								BIRTHDATE DATE,
// 								ADDRESS VARCHAR(50),
// 								CONTACT INT(15),
// 								CITY VARCHAR(30),
// 								STATES VARCHAR(30),
// 								COUNTRY VARCHAR(50)
// 													)";
// 			if ($conn->query($sql) === TRUE ) {
// 			}
// 			else{
// 				echo "Faild To Create CUSTOMER TABLE" .$conn->error;
// 			}
			

	
// //sql to create table
// $sql = "CREATE TABLE MANAGERS (
// 								MR_NO INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// 								FNAME VARCHAR(30) NOT NULL,
// 								LNAME VARCHAR(30) NOT NULL,
// 								EMAIL VARCHAR(255) UNIQUE,
// 								PASSWORD VARCHAR(50) NOT NULL,
// 								CONTACT INT(15),
// 								CITY VARCHAR(30)
// 													)";
			// if ($conn->query($sql) === TRUE ) {
			// }
			// else{
			// 	echo "Faild To Create MANAGERS TABLE" .$conn->error;
			// }			 			


	// $sql = "CREATE TABLE FOODSDETAILS (
	// 								ITEM_NO INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	// 								ITEM_NAME VARCHAR(30) UNIQUE,
	// 								CHEIF_NAME VARCHAR(30),
	// 								QUANTITY INT(10),
	// 								AVAILBILITY VARCHAR(30),
	// 								PRICE INT(10)
									
	// 								  )"; 
	// 				if ($conn->query($sql) === TRUE ) {
	// 				}
	// 				else{
	// 					echo "Faild To Create MANAGERS TABLE" .$conn->error;
	// 				}			 			


		// $sql = "CREATE TABLE FOODSPECIAL (
		// 							ITEM_NO INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		// 							ITEM_NAME VARCHAR(30) UNIQUE,
		// 							QUANTITY INT(10),
		// 							PRICE INT(10)
									
	    // 							  )"; 
		// 			if ($conn->query($sql) === TRUE ) {
		// 			}
		// 			else{
		// 				echo "Faild To Create MANAGERS TABLE" .$conn->error;
		// 			}		
		
	// $sql = "CREATE TABLE ORDERDETAILS (
	// 	 							ORDER_NO INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	// 	 							ITEM_NAME VARCHAR(30) UNIQUE NOT NULL,
	// 	 							QUANTITY INT(10) NOT NULL,
	// 	 							PRICE INT(10) NOT NULL,
	// 								CID INT(6) UNSIGNED
	// 								)"; 
	 								
		
		// $sql="ALTER TABLE orderdetails ADD CONSTRAINT FK_ORDER_CUSTOMER FOREIGN KEY (CID) REFERENCES customer(CID)  ON UPDATE CASCADE";
			

			// if ($conn->query($sql) === TRUE ) {
		 // 			}
		 // 			else{
		 // 				echo "Faild To Create MANAGERS TABLE" .$conn->error;
		 // 			}		




		 // $sql = "CREATE TABLE ROOMS (
		 // 							ROOM_NO INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		 // 							ROOM_NAME VARCHAR(30) UNIQUE NOT NULL,
		 // 							RATING NUMERIC(2,2) NOT NULL,
		 // 							REVIEWS INT(10),
		 // 							GUEST_CAPACITY INT(10),
		 // 							PRICE INT(10) NOT NULL
			// 						)"; 
	 								

			
	// $sql = "CREATE TABLE ROOMS (
	//  							ROOM_NO INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	// 	 // 							ROOM_NAME VARCHAR(30) UNIQUE NOT NULL,
	// 	 // 							RATING NUMERIC(2,2) NOT NULL,
	// 	 // 							REVIEWS INT(10),
	// 	 // 							GUEST_CAPACITY INT(10),
	// 	 // 							PRICE INT(10) NOT NULL
	// 		// 						)"; 
	// 		if ($conn->query($sql) === TRUE ) {
	// 	 			}
	// 	 			else{
	// 	 				echo "Faild To Create MANAGERS TABLE" .$conn->error;
	// 	 			}		


		
		// $sql = "CREATE TABLE ADMIN (
	 // 									ADMIN_ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		//  	 							ADMIN_NAME VARCHAR(30)  NOT NULL,
		//  	 							ADMIN_EMAIL VARCHAR(50) UNIQUE NOT NULL,
		//  	 							ADMIN_PASSWORD VARCHAR(20) NOT NULL,
		//  	 							ADMIN_CONTACT INT(15)

		// 	 						)"; 
		
		// if ($conn->query($sql) === TRUE ) {
		// }
		// else{
		//    echo "Faild To Create MANAGERS TABLE" .$conn->error;
		// }		


		
		// $sql = "CREATE TABLE BOOKING (
	 // 									BOOKING_NO INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		//  	 							ROOM_NO INT(10) UNSIGNED,
		//  	 							CUSTOMER_NAME VARCHAR(30) UNIQUE,
		//  	 							ARRIVAL_DATE DATE,
		//  	 							DEPARTURE DATE
	 //    		 						)"; 
		
		// if ($conn->query($sql) === TRUE ) {
		// }
		// else{
		//    echo "Faild To Create MANAGERS TABLE" .$conn->error;
		// }	

		// $sql="ALTER TABLE BOOKING ADD CONSTRAINT FK_ROOM_BOOKING FOREIGN KEY (CUSTOMER_NAME) REFERENCES CUSTOMER(FNAME) ON UPDATE CASCADE"; 
		// $sql="ALTER TABLE BOOKING ADD CONSTRAINT FK_ROOM_BOOKING FOREIGN KEY (ROOM_NO) REFERENCES ROOMS(ROOM_NO) ON UPDATE CASCADE"; 
		
		// if ($conn->query($sql) === TRUE ) {
		// }
		// else{
		//    echo "Faild To Create MANAGERS TABLE" .$conn->error;
		// }		




// $sql="CREATE TRIGGER itemHistory2 AFTER INSERT ON foodsdetails
// FOR EACH ROW
// BEGIN
// INSERT INTO itemlog (`ITEM_NO`, `ITEM_NAME`, `CHEIF_NAME`, `QUANTITY`, `AVAILBILITY`,`PRICE`,`OPERATION`) 
// VALUES (NEW.ITEM_NO,NEW.ITEM_NAME,NEW.CHEIF_NAME,NEW.QUANTITY,NEW.AVAILBILITY,NEW.PRICE,'INSERTION');
// END";

// 		if ($conn->query($sql) === TRUE ) {
// 		}
// 		else{
// 		   echo "Faild To Create MANAGERS TABLE" .$conn->error;
// 		}		



 	
// $conn->close();
?>



