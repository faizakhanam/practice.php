
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CONTECT US</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CONTECT US</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>      
<?php
//if($_SERVER['REQUEST_METHOD'] == 'POST')
if(isset($_POST['submit'])) //add this [HASEEB]
{
$name = $_POST['name'];
$email = $_POST['email'];
$des = $_POST['des'];
           
//connecting to the databaase
                 
$servername = "localhost";
$username = "root";
$password = "";
$database = "contex";
//contex yaha py wo database h jo sql my already create hoa ha or hm os k andar mazeed table wagera bnany lgy h //
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)
{
    die("sorry we are failed to connect: ". mysqli_connect_error());
}
}
else
{
    //insertion submit variable in database
    echo "connection was sucessfull to database<br>";
//$sql = "INSERT INTO `contect` (`erial no`, `name`,'email', 'concern', 'fill date') VALUES ('1', '$name', '$email', '$des', 'CURRENT_TIMESTAMP')";
$sql = "INSERT INTO`contect` (`name`, `email`, `concern`, `fill date`) VALUES ('$name', '$email', '$des', CURRENT_TIMESTAMP())";
    
// run query result in database
    
$result = mysqli_query($conn, $sql);

if($result)
{
echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>success!</strong> your entry has been submited successfully.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
          </button></div>';
}
else
{
    echo "The record was not inserted successfuly beacuse of this error --->".mysqli_error($conn);

}
    
}
      
?> 
      
      <div class ="container mt-3">
      
      <h1>Contect Us For Your Concern</h1>
          
      <form action="/cwhphp/form.php" method="post">
          
  <div class="form-group">
    <label for="name">Name address</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
          
 <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
          
  <div class="form-group">
    <label for="des">Description</label>
  <textarea class="form-control" name="des" id="des" cols="30" rows="10"></textarea>  
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button><!-- add name to submit button important -->
</form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
    
</html>