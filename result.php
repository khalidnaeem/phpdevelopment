<?php 
require 'connection.php'; 
?>
<!-- php starts here -->
      <?php 
      #getting values from label
      #shipper information TAB
      $ShipperName = $_POST['shippername'];
      $ShipperAddress = $_POST['shipperaddress'];
      $ShipperEmail = $_POST['shipperemail'];
      $ShipperMobile = $_POST['shippermobile'];
      #customer information TAB
      $OrderID = $_POST['orderid'];
      $CustomerName = $_POST['customername'];
      $CustomerAddress = $_POST['customeraddress'];
      $CustomerEmail = $_POST['customeremail'];
      $CustomerMobile = $_POST['customermobile'];
      $CustomerCity = $_POST['customerciity'];
      #shipment details TAB
      $ParcelType = $_POST['parceltype'];
      $ParcelWeight = $_POST['parcelweight'];
      $Fragile = $_POST['fragile'];
      $CashCollect = $_POST['cashcollect'];
      #insert values to the db
      $insert = "INSERT INTO labels(shipper_name, shipper_address, shipper_email, shipper_mobile_number, order_id, customer_name, customer_address, customer_email, customer_mobile, customer_city, parcel_type, parcel_weight, fragile, cash_collection) VALUES('$ShipperName', '$ShipperAddress', '$ShipperEmail', '$ShipperMobile', '$OrderID', '$CustomerName', '$CustomerAddress', '$CustomerEmail', '$CustomerMobile', '$CustomerCity', '$ParcelType', '$ParcelWeight', '$Fragile', '$CashCollect')";
      #query to execute the label form
      $execute = mysqli_query($conn,$insert);
      #message for inserting the data 
      if($execute){
            echo "<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>";
      	echo "<h1> <center>Congrats! Your Shipment is created. </center> </h1>";
      }else{
      	echo "Error occured! Data not inserted.";
      }  
      ?>

      <!DOCTYPE html>
      <html>
      <head>
            <title></title>
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Gotu&display=swap" rel="stylesheet">
      <!-- custom stylesheet -->
      <link rel="stylesheet" type="text/css" href="style.css">
      </head>
      <body> 
           <center>
           <a href="show.php" class="btn btn-primary btn-md">Show All Entries</a>
           <a href="create-label.php" class="btn btn-success btn-md">Create New Label</a>
           <a href="index.html" class="btn btn-dark btn-md">Back to Homepage</a>
            </center>
      </body>
      </html>