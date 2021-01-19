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

if(isset($_POST['submit']))
{





    $name =  $_POST["name"];
    $ca =$_POST["ca"];
    $phone1 =$_POST["sky"];
    $type =$_POST["type"];
   
    $qu =$_POST["qu"];


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    


    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
       
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["imageUpload"]["name"],".jpg"); 


    $sql = "INSERT INTO oder(name,phone,category,quantity,image,type,lat,lng) VALUES('$name','$phone1','$ca ','$qu','{$image}', '$type','$lat','$lng')";

           if(mysqli_query($conn, $sql)){
   
 

            header("Location:user_index.php");



  }







}
  
?>





























