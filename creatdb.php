<?php

/*
asa kn krta ha
db kud create kr lo phpmyadmin sa adhr sa koi ni krta
tum table bnana ki kr lo practice db ma.
*/

$servername = "localhost";
$username = "username";
$password = "";
//$dbname ="db_test";

// Create connection
$conn = new mysqli($servername, $username, $password,);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<br>";
//creat database

$sqli = "CREATE DATABASE Bilal";
$result = mysqli_query($conn,$sqli);
// check database creation 
if($result){
echo "database created succesfully";
} else {
    echo "database  was not created succesfully beause of this error----->".mysqli_error($conn);
}
echo "<br>";
echo "this is ";
echo var_dump($result);
echo "<br>";
?>