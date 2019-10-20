<?php
$servername = "localhost";
$username = "root";
$password="123";
$database = "ajax";

$con = mysqli_connect ($servername,$username,$password,$database);

if (mysqli_connect_errno()) {
   echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}else {
    echo "Connected";
}

 ?>
