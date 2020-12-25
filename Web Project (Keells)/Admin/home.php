<?php

session_start();
if(!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title> Home Page </title>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>

    <div class="container">

<a class="float-right" href="logout.php"> LOGOUT </a>

<h1> welcome <?php echo $_SESSION['username']; ?> </h1>

    </div>  
</body>
</html>