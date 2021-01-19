<?php
$con = mysqli_connect("localhost", "root", "", "keells");
if($con){
  echo "";
}
?>
<?php 

$userName=$_GET['username'];


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

$sql = "SELECT * FROM  keells_admin WHERE  userName= '$userName' ";
$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));


while($res = mysqli_fetch_array($result)) {  
	
	
	$type =$res['type'];

 

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>charts</title>
    <link rel="stylesheet" type="text/css" href="/keells/Admin_dashboard/css/table.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<nav class="navbar navbar-style">
    <div class="container">
      <div class="navbar-header">
      
       <a href="/keells/index.php"><img class="logo" src="/keells/images/keellslogo.png"></a>
     </div>
      
      <ul class="nav justify-content-end">
       
       </ul>
     </div>
    </div>
    <a href="<?php echo "index.php?username=$userName" ?>" style="background:#478541 ;" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span>Back</a>
</nav>  
<br>
<br>
<h2 style="width: 300px; height: 200px; margin-left: 1075px;color:darkgreen;font-size:25px;">Need Fruits</h2>
<section>

<table style="width:100px;border: 2px solid black; margin-left: 1050px;margin-top: -150px;border: 1px solid black;border-collapse: collapse;border-spacing: 5px;" class="sky">
  <tr>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Category</th>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Quantity</th>
  </tr>
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
								
 

									$sql = "SELECT * FROM  homechart4 ";
									$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
 
 
	 
									while($res = mysqli_fetch_array($result)) {         
                   echo "<tr class ='mood'>";
									 echo "<td  >".$res['category']."</td>"; 
									 echo "<td  >".$res['quantity']."</td>"; 
									   }                                
     ?>





</table>



</section>
<br>
<h2 style="width: 300px; height: 200px; margin-left: 750px;margin-top: -350px;color:darkgreen;font-size:25px;">Stock Fruits</h2>
<section>

<table style="width:100px;border: 2px solid black; margin-left: 730px;margin-top: -150px;border: 1px solid black;border-collapse: collapse;border-spacing: 5px;" class="sky">
  <tr>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Category</th>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Quantity</th>
  </tr>
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
								
 

									$sql = "SELECT * FROM  homechart3  ";
									$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
 
 
	 
									while($res = mysqli_fetch_array($result)) {         
                   echo "<tr class ='mood'>";
									 echo "<td  >".$res['category']."</td>"; 
									 echo "<td  >".$res['quantity']."</td>"; 
									   }                                
     ?>





</table>



</section>
<br>
<h2 style="width: 300px; height: 200px; margin-left: 425px;color:darkgreen;margin-top: -330px;font-size:25px;">Need Vegetables</h2>
<section>

<table style="width:100px;border: 2px solid black; margin-left: 430px;margin-top: -150px;border: 1px solid black;border-collapse: collapse;border-spacing: 5px;" class="sky">
  <tr>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Category</th>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Quantity</th>
  </tr>
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
								
 

									$sql = "SELECT * FROM  homechart2  ";
									$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
 
 
	 
									while($res = mysqli_fetch_array($result)) {         
                   echo "<tr class ='mood'>";
									 echo "<td  >".$res['category']."</td>"; 
									 echo "<td  >".$res['quantity']."</td>"; 
									   }                                
     ?>





</table>



</section>
<br>
<h2 style="width: 300px; height: 200px; margin-left: 100px;;margin-top: -525px;color:darkgreen;font-size:25px;">Stock Vegetables</h2>
<section>

<table style="width:100px;border: 2px solid black; margin-left: 110px;margin-top: -150px;border: 1px solid black;border-collapse: collapse;border-spacing: 5px;" class="sky">
  <tr>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Category</th>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Quantity</th>
  </tr>
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
								
 

									$sql = "SELECT * FROM  homechart  ";
									$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
 
 
	 
									while($res = mysqli_fetch_array($result)) {         
                   echo "<tr class ='mood'>";
									 echo "<td  >".$res['category']."</td>"; 
									 echo "<td  >".$res['quantity']."</td>"; 
									   }                                
     ?>





</table>






</section>
<h2 style="width: 300px; height: 200px; margin-left: 950px;;margin-top: 100px;color:darkgreen;font-size:25px;">Wasted Fruits</h2>
<section>

<table style="width:500px;border: 2px solid black; margin-left: 780px;margin-top: -150px;border: 1px solid black;border-collapse: collapse;border-spacing: 5px;" class="sky">
  <tr>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Category</th>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Quantity</th>
  </tr>
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
								
 

									$sql = "SELECT * FROM  wasted_fruits  ";
									$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
 
 
	 
									while($res = mysqli_fetch_array($result)) {         
                   echo "<tr class ='sun'>";
									 echo "<td  >".$res['category']."</td>"; 
									 echo "<td  >".$res['quantity']."</td>"; 
									   }                                
     ?>





</table>






</section>
</body>
</html>

<br>
<h2 style="width: 300px; height: 200px; margin-left: 250px;;margin-top: -250px;color:darkgreen;font-size:25px;">Wasted Vegetables</h2>
<section>

<table style="width:500px;border: 2px solid black; margin-left: 110px;margin-top: -150px;border: 1px solid black;border-collapse: collapse;border-spacing: 5px;" class="sky">
  <tr>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Category</th>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Quantity</th>
  </tr>
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
								
 

									$sql = "SELECT * FROM  wasted_vegetables  ";
									$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
 
 
	 
									while($res = mysqli_fetch_array($result)) {         
                   echo "<tr class ='sun'>";
									 echo "<td  >".$res['category']."</td>"; 
									 echo "<td  >".$res['quantity']."</td>"; 
									   }                                
     ?>





</table>






</section>
</body>
</html>

<style>


.mood{

  width:10px;
  border: 1px solid black;
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px;
  text-align: center;


}

.sun{

width:100px;
border: 1px solid black;
border: 1px solid black;
border-collapse: collapse;
padding: 10px;
text-align: center;


}


</style>