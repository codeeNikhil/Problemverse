<?php

$server="localhost";
$username="root";
$password="";
$database="problemverse";
$con=mysqli_connect($server,$username,$password,$database);

if(!$con){
    echo "
    <script>alert('Oops . error ! Try again later');</script>";

  }


?>