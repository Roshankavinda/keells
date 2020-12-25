<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'keells');

$name = $_POST['user'];
$nic = $_POST['nic'];
$pass =$_POST['password'];

$s = "select * from usertable where name = '$name' && nic = '$nic' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){ 
    $_SESSION['username'] = $name;
    header('location:home.php');
    
}else{
    header('location:login.php');
   
}

?>