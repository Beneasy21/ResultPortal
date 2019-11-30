<?php
$host = "localhost";
$userName = "root";
$host = "localhost";
$database = "secondaryskul";
$con = mysqli_connect("$host","$userName","");
mysqli_select_db($con,$database);
?>