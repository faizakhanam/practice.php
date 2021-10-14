<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "employee";
//employee yaha py wo database h jo sql my already create hoa ha or hm os k andar mazeed table wagera bnany lgy h //

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)
{
    die("sorry we are failed to connect: ". mysqli_connect_error());
}
else
{
    echo "connection was sucessfull to database<br>";
}
    
    // add new line employee table in data base
//add variables value in table using variable

    $name = "mahi";
    $destination = "sargodha";
$sql = "INSERT INTO `phpemployee member` (`name`, `des`) VALUES ('$name', '$destination')";
    
// run query result in database
    
$result = mysqli_query($conn, $sql);

if($result)
{
echo "The record has been inserted successfuly<br>";
}
else
{
    echo "The record was not inserted successfuly beacuse of this error --->".mysqli_error($conn);

}


?>