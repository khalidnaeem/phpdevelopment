<?php  
require 'connection.php';
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Create Shipping Label</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Gotu&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- custom stylesheet -->
      <link rel="stylesheet" type="text/css" href="style.css">
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
      <div class="container-fluid mt-4">
         <div class="row">
            <div class="col-sm-4">
               
                  <h5 class="shipper-head">Shipper Information</h5>
                  <!-- spacing -->
                  <br>
                  <!-- form -->
                  <form method="post" action="result.php">
                  <div class="form-group">
                     <label for="Shipper Name">Shipper Name:</label>
                     <input type="text" name="shippername" class="form-control" value="Trynowpk Online Shopping Marketplace" readonly>
                  </div>
                  <div class="form-group">
                     <label for="Shipper Address">Shipper Address:</label>
                     <textarea rows="3" type="text" name="shipperaddress" class="form-control" readonly>6 Shahi Road, Opposite Pearl Bakers, RahimYarKhan</textarea>
                  </div>
                  <div class="form-group">
                     <label for="Shipper Email">Shipper Email:</label>
                     <input type="email" name="shipperemail" class="form-control" value="Trynowpk@gmail.com" readonly>
                  </div>
                  <div class="form-group">
                     <label for="Shipper Shipper Mobile">Shipper Mobile Number:</label>
                     <input type="tel" name="shippermobile" class="form-control" value="0300 8178608, 0300 6744245" readonly>
                  </div>
            </div>
         
            <div class="col-sm-4">
               <h5 class="customer-head">Customer Information</h5>
               <!-- spacing --> 
            
                  <br>
                  <div class="form-group">
                     <label for="Order ID From Trynowpk">Order #:</label>
                     <input type="text" name="orderid" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label for="Customer Name">Customer Name:</label>
                     <input type="text" name="customername" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label for="Customer Name">Customer Complete Address With Zipcodes:</label>
                     <textarea rows="3" type="text" name="customeraddress" class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                     <label for="Customer Email">Customer Email:</label>
                     <input type="email" name="customeremail" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label for="Customer Phone">Customer Mobile Number:</label>
                     <input type="tel" name="customermobile" class="form-control" placeholder="0300xxxxxx" required>
                  </div>
                  <div class="form-group">
                     <label for="Customer City">Customer City:</label>
                     <input type="tel" name="customerciity" class="form-control" value="RahimYarKhan" readonly>
                  </div>
            </div>
            
            <div class="col-sm-4">
               <h5 class="parcel-head">Shipment Details</h5>
               <!-- spacing -->
               <br>
               <div class="form-group">
                  <label for="Parcel Type">Parcel Type:</label>
                  <input type="text" name="parceltype" class="form-control" value="Flyer" readonly>
               </div>
               <div class="form-group">
                  <label for="Parcel Weight">Parcel Weight in KG:</label>
                  <input type="text" name="parcelweight" class="form-control" value="Up to 1KG" required>
               </div>
               <div class="form-group">
                  <label for="Fragile">Fragile:</label>
                  <input type="text" name="fragile" class="form-control" value="Yes" readonly>
               </div>
               <div class="form-group">
                  <label for="Cash Collect">Cash Collection in Rs:</label>
                  <input type="text" name="cashcollect" class="form-control" value="Rs." required>
               </div>
               <div class="form-group">
                  <input type="submit" name="save" class="btn btn-success" value="Create Shipment"> <br> <br>
                   <a href="show.php" class="btn btn-primary">Show All Entries</a> <br> <br>
                   <a href="index.html" class="btn btn-dark">Go to Homepage</a>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>