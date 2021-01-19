<?php
// Using database connection file here

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keells";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$id = $_GET['id'];
$price = $_GET['price']; 
$c = $_GET['conf'];




$sql1 = "UPDATE oder SET  status='$c'   WHERE id= $id";
       
		
if(mysqli_query($conn, $sql1)){

    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
 
    header("Location:admin-map.php");

  }
  else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);

}









?>