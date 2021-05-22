<?php 
require 'connection.php';
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Show All Booking Information</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Gotu&display=swap" rel="stylesheet">
      <!-- custom stylesheet -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <style>
        th, td{
          font-size: 13px !important;
        }
      </style>
   </head>
   <body>
   <!-- Header -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
  <a class="navbar-brand" href="index.html" style="color: whitesmoke !important">Trynowpk Booking Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html" style="color: whitesmoke !important">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create-label.php" style="color: whitesmoke !important">Create Shipping Label</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="show.php" style="color: whitesmoke !important;">Show All Booking Entries</a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>
  </div>
</nav>

<!-- Header End -->
   <!-- Creating Db Entries -->
   <!-- Table -->
  <div class="container-fluid mt-4">
    <h3 class="text-center" id="all-label-entries">All Label Entries</h3>
    <!-- The form -->
<form class="example" action="show.php">
  <input type="text" placeholder="Search by order id" name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<br> 
<a href="create-label.php" class="btn btn-success btn-md">Create New Label</a>
<a href="index.html" class="btn btn-success btn-dark">Go to Homepage</a>
<br> <br>
  <table class="table table-bordered table-striped" id="show-table"> <small>
    <tr>
    <th>ID</th>
    <th>Shipper Name</th>
    <th>Shipper Address</th>
    <th>Order ID & Order Date</th>
    <th>Customer Name</th>
    <th>Customer Address</th>
    <th>Customer Email</th>
    <th>Customer Mobile</th>
    <th>Customer City</th>
    <th>Parcel Weight (KG)</th>
    <th>Cash Collection in (Rs)</th>
    <th colspan="2" class="text-center">Action</th>
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
      echo "<tr align='center'>";
      echo "<td>".$fetcher['id']."</td>";
      echo "<td>".$fetcher['shipper_name']."</td>";
      echo "<td>".$fetcher['shipper_address']."</td>";
      echo "<td style='font-weight: bolder;'>".$fetcher['order_id']."</td>";
      echo "<td>".$fetcher['customer_name']."</td>";
      echo "<td>".$fetcher['customer_address']."</td>";
      echo "<td>".$fetcher['customer_email']."</td>";
      echo "<td>".$fetcher['customer_mobile']."</td>";
      echo "<td>".$fetcher['customer_city']."</td>";
      #echo "<td>".$fetcher['parcel_type']."</td>";
      echo "<td>".$fetcher['parcel_weight']."</td>";
      #echo "<td>".$fetcher['fragile']."</td>";
      echo "<td>".$fetcher['cash_collection']."</td>";
      
      echo "<td><a href='shipping-label-output.php?id=$ids' class='btn btn-success btn-md'>Print</a>";
      echo "<td><a href='delete.php?id=$ids' class='btn btn-danger btn-md'>Delete</a>";

      echo "</tr>";
    }

    ?>
   	</body> </html> </small>