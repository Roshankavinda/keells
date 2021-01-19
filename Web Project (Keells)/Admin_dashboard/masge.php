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

     //to check if the form was submitted
   
$masge = $_GET['massge'];
$name= $_GET['name'];
$type ="1";



$sql = "INSERT INTO chat(name,message,type) values ('$name' , '$masge' , '$type')";
if(mysqli_query($conn, $sql)){

   



} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



$conn->close();





  