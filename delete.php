<?php
require 'connection.php';

//page taking values via is from previous page
$del = $_GET['id'];

//query of delete
$execute = "DELETE FROM labels WHERE id = '$del'";
mysqli_query($conn,$execute);
//redirection the page
header("Location: show.php");
?>