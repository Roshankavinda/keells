<?php

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

if (isset($_POST['submit'])) {       //to check if the form was submitted
   
$name = $_POST['userName'];
$nicNumber = $_POST['nicNumber'];
$password =$_POST['password'];



$sql = "INSERT INTO user(userName, nicNumber , password) values ('$name' , '$nicNumber' , '$password')";
if(mysqli_query($conn, $sql)){

    header("Location:../index.php");



} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



$conn->close();


   }


  




?>