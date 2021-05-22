<?php
require 'connection.php';

//page taking values via is from previous page
$print = $_GET['id'];

//query of delete
$execute = "SELECT FROM labels WHERE id = '$print'";
mysqli_query($conn,$execute);
//redirection the page
header("Location: print.php");
?>