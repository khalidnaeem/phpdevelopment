<?php 
require 'connection.php';
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Shipping Label Output</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Gotu&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
      <!-- custom stylesheet -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <style>
      body{
        font-size: 14px;
      </style>
   </head>
   <body>
   
   <!-- Creating Db Entries -->
   <!-- Table -->
  <div class="container-fluid mt-2"> <br>
  	<br>
<h4 class="text-center"> <u>Customer's Copy  </u></h4>
  <table class="table table-bordered table-striped">
    <tr>
    </tr>
    
    <!--php starts here -->
    <?php 
    //getting all query from database
    $fetch = "SELECT * FROM labels";
    //getting the query
    $execute = mysqli_query($conn,$fetch);
    //showing all the values from database
    foreach ($execute as $fetcher) {
      $ids = $fetcher['id'];
      echo "<tr>";
      echo "<td style='font-weight: bolder; font-size: 25px; background-color: #F4D03F  ; color: black'>Shipper Information</td>";
      echo "<td style='font-weight: bolder;'>Shipper Name:<br><hr color='gray'><br>".$fetcher['shipper_name']."</td>";
      echo "<td style='font-weight: bolder;'>Shipper Address:<br><hr color='gray'><br>".$fetcher['shipper_address']."</td>";
      echo "<td style='font-weight: bolder;'>Shipper Email:<br><hr color='gray'><br>".$fetcher['shipper_email']."</td>";
      echo "<td style='font-weight: bolder;'>Shipper Contact:<br><hr color='gray'><br>".$fetcher['shipper_mobile_number']."</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td style='font-weight: bolder; font-size: 25px; background-color: #F4D03F  ; color: black'>Customer Information</td>";
      echo "<td style='font-weight: bolder;'>Order ID:<br><hr color='gray'><br>".$fetcher['order_id']."</td>";
      echo "<td style='font-weight: bolder;'>Customer Name:<br><hr color='gray'><br>".$fetcher['customer_name']."</td>";
      echo "<td style='font-weight: bolder;'>Customer Address:<br><hr color='gray'><br>".$fetcher['customer_address']."</td>";
      echo "<td style='font-weight: bolder;'>Customer Email:<br><hr color='gray'><br>".$fetcher['customer_email']."</td>";
      echo "<td style='font-weight: bolder;'>Customer Mobile Number<br><hr color='gray'><br>".$fetcher['customer_mobile']."</td>";
      echo "<td style='font-weight: bolder;'>Customer City:<br><hr color='gray'><br>".$fetcher['customer_city']."</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td style='font-weight: bolder; font-size: 25px; background-color: #F4D03F  ; color: black'>Parcel / Payment Details</td>";
      echo "<td style='font-weight: bolder;'>Parcel Type:<br><hr color='gray'><br>".$fetcher['parcel_type']."</td>";
      #echo "<td>".$fetcher['parcel_type']."</td>";
      echo "<td style='font-weight: bolder;'>Parcel Weight:<br><hr color='gray'><br>".$fetcher['parcel_weight']."</td>";
      #echo "<td>".$fetcher['fragile']."</td>";
      echo "<td style='font-weight: bolder;'>Fragile:<br><hr color='gray'></br>".$fetcher['fragile']."</td>";
      echo "<td style='font-weight: bolder; font-size: 20px'>Cash Collect:<br><hr color='gray'></br>".$fetcher['cash_collection']."</td>";
      echo "</tr>";

      echo "<br>";
    }

    ?>

</table>
<br>
<span>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span>
<br> <br>
<h4 class="text-center"> <u> Accounts Copy </u></h4>
<br>
  <table class="table table-bordered table-striped">
    <tr>
    </tr>
    
    <!--php starts here -->
    <?php 
    //getting all query from database
    $fetch = "SELECT * FROM labels";
    //getting the query
    $execute = mysqli_query($conn,$fetch);
    //showing all the values from database
    foreach ($execute as $fetcher) {
      $ids = $fetcher['id'];
      echo "<tr>";
      echo "<td style='font-weight: bolder; font-size: 25px; background-color: #F4D03F  ; color: black'>Shipper Information</td>";
      echo "<td style='font-weight: bolder;'>Shipper Name:<br><hr color='gray'><br>".$fetcher['shipper_name']."</td>";
      echo "<td style='font-weight: bolder;'>Shipper Address:<br><hr color='gray'><br>".$fetcher['shipper_address']."</td>";
      echo "<td style='font-weight: bolder;'>Shipper Email:<br><hr color='gray'><br>".$fetcher['shipper_email']."</td>";
      echo "<td style='font-weight: bolder;'>Shipper Contact:<br><hr color='gray'><br>".$fetcher['shipper_mobile_number']."</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td style='font-weight: bolder; font-size: 25px; background-color: #F4D03F  ; color: black'>Customer Information</td>";
      echo "<td style='font-weight: bolder;'>Order ID:<br><hr color='gray'><br>".$fetcher['order_id']."</td>";
      echo "<td style='font-weight: bolder;'>Customer Name:<br><hr color='gray'><br>".$fetcher['customer_name']."</td>";
      echo "<td style='font-weight: bolder;'>Customer Address:<br><hr color='gray'><br>".$fetcher['customer_address']."</td>";
      echo "<td style='font-weight: bolder;'>Customer Email Address:<br><hr color='gray'><br>".$fetcher['customer_email']."</td>";
      echo "<td style='font-weight: bolder;'>Customer Mobile Number<br><hr color='gray'><br>".$fetcher['customer_mobile']."</td>";
      echo "<td style='font-weight: bolder;'>Customer City:<br><hr color='gray'><br>".$fetcher['customer_city']."</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td style='font-weight: bolder; font-size: 25px; background-color: #F4D03F  ; color: black'>Parcel / Payment Details</td>";
      echo "<td style='font-weight: bolder;'>Parcel Type:<br><hr color='gray'><br>".$fetcher['parcel_type']."</td>";
      #echo "<td>".$fetcher['parcel_type']."</td>";
      echo "<td style='font-weight: bolder;'>Parcel Weight:<br><hr color='gray'><br>".$fetcher['parcel_weight']."</td>";
      #echo "<td>".$fetcher['fragile']."</td>";
      echo "<td style='font-weight: bolder;'>Fragile:<br><hr color='gray'></br>".$fetcher['fragile']."</td>";
      echo "<td style='font-weight: bolder; font-size: 20px'>Cash Collect:<br><hr color='gray'></br>".$fetcher['cash_collection']."</td>";
      echo "</tr>";

      echo "<br>";
    }

    ?>

</table>


   	</body> </html>