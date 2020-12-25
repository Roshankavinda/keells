<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'keells');

$name = $_POST['user'];
$nic = $_POST['nic'];
$pass =$_POST['password'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){ 
    echo" Username already exist ";

}else{
    $reg= " insert into usertable(name , nic , password) values ('$name' , '$nic' , '$pass')";
    mysqli_query($con, $reg);
    echo "Registration successful";

}

?>