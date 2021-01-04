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


if(isset($_POST["userName"]) && isset($_POST["password"])){


  if(isset($_POST["submit"]))

  {


    $userName =  $_POST["userName"];
    $password =$_POST["password"];



  
    
    $userName = $_REQUEST["userName"];
      $_SESSION["userName"] = $userName;
    
    $sql = mysqli_query($conn,"SELECT * FROM user WHERE userName='$userName' AND password='$password' LIMIT 1")or die(mysqli_error($conn));
    
    $userCount = mysqli_num_rows($sql);
    if($userCount == 1){
    while($row = mysqli_fetch_array($sql)){
      $id = $row["id"];
    
      $_SESSION["userName"]=$_POST["userName"];
    }
    if (isset($_SESSION["userName"]) && isset($_POST["userName"])){

      header("Location:../user/user_index.php?username=$userName");

    $_SESSION["userName"] = $userName;

    
    
    exit();
    }
    }else{
    echo '<div class="echo"> User Name or Password is incorrect </div>';
    exit();
    }
    }

    
    


  }


?>


