<<?php

$hostname = "localhost";
$database = "creactivmedia_local";
$username = "root";
$password = "";

$con=mysqli_connect($hostname,$username,$password,$database);
// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  //	echo "conexion exitosa";
  }




?>