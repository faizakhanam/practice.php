<?php
echo "My sql are start hare"."  "."welcom we are ready to that stage to connect tha database";
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
$servername = "local host";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn)
{
   die("sorry we failed to connect: ". mysqli_connect_error());
}
else{
echo "connection is successful";
  } 
?>