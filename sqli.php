<?php
/* two way to connect the database
my sqli extenstion
pdo(jb ik sy ziyda server py run krna ho tb pdo my code likhna)*/


/*
you are using it wrong it has four parameters not 3 
$connection = mysqli_connect("localhost", "root", "", "core_ppt");

  if(!mysqli_connect()){
    echo "Database connection Error";
    exit();
  }
  and locahost is one word not 2 word

  $hostname,$user,$password,$db this is the right parameters



*/

    echo "My sql are start Hare"."  "."Welcom we are ready to that stage to connect tha Database.";

$servername = "localhost";
$username = "username";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<br>";
echo "Connected successfully";
?>