 <?php
        include("db.php");
        ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	   <!-- Bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
    
     <style>
          
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }
        
       
        
        h4 {
            color: #ffbb2b;
        }
        h6
        {
            color: navajowhite;
            font-family:  monospace;
        }


    </style>
    
    
</head>
<body >
	 <?php
        include("header.php");
        ?>

	<!-- <div class="rooms">
		<div class="container">
			<div class="row">
				<div class="col-md-4" style="padding:50px">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="../assets/slide1.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Duplex</h5>
					    <p class="card-text">No of Beds: 2 single bed.
					     Facilities: AC, TV, Wifi Price: 1500 tk/night.</p>
					    <a href="./booking.html" class="btn btn-primary">Book Now</a>
					  </div>
					</div>
				</div>
				<div class="col-md-4" style="padding:50px">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="../assets/slide2.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Family</h5>
					    <p class="card-text">No of Beds: 2 double bed. Facilities: Sofa, TV, WIFI, Balcony, AC.Price: 3500 tk/night.</p>
					    <a href="./booking.html" class="btn btn-primary">Book Now</a>
					  </div>
					</div>
				</div>
				<div class="col-md-4" style="padding:50px">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="../assets/slide3.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Super Comfort</h5>
					    <p class="card-text">No of Beds: 1 double bed.Facilities: AC, TV, WIFI.Price: 2200 tk/night.</p>
					    <a href="./booking.html" class="btn btn-primary">Book Now</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
		
	</div> -->





 


<body>
   <div class="container">
      
      
       
       
        
        
        
        <?php
        
        $sql="SELECT * FROM room_category";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
//               ********************************************** Show Room Category***********************
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo "
                            <div class='row'>
                            <div class='col-md-3'></div>
                            <div class='col-md-6 well'>
                                <h4>".$row['roomname']."</h4><hr>
                                <h6>No of Beds: ".$row['no_bed']." ".$row['bedtype']." bed.</h6>
                                <h6>Facilities: ".$row['facility']."</h6>
                                <h6>Price: ".$row['price']." tk/night.</h6>
                            </div>
                            <div class='col-md-3'>
                                <a href='./booking.php?roomname=".$row['roomname']."'><button class='btn btn-primary button'>Book Now</button> </a>
                            </div>   
                            </div>
                            
                            
                        
                    
                         "; //echo end
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "NO Data Exist";
            }
        }
        else
        {
            echo "Cannot connect to server".$result;
        }
        
        
        
        
        
        ?>


    </div>
    
    
    
    



</body>

 <?php
        include("footer.php");
        ?>


</html>

</body>
</html>