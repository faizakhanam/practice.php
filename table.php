<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "employee";//employee yaha py wo database h jo sql my already create hoa ha or hm os k andar mazeed table wagera bnany lgy h //
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("sorry we are failed to connect: ". mysqli_connect_error());
}
else{
    echo "connection was sucessfull to database<br>";
}
//create table in database 
$sql = "CREATE TABLE `1phpemployee member` ( `serial no` INT(6) NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `des` VARCHAR(6) NOT NULL , PRIMARY KEY (`serial no`))";
//check for table creation
$result = mysqli_query($conn, $sql);
if($result){
echo "the table was creates successfuly<br>";
}
else
{
    echo "the table was not create successfuly beacuse of this error --->".mysqli_error($conn);
}
?>