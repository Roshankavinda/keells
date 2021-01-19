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
    <link rel="stylesheet" type="text/css" href="/keells/Admin_dashboard/css/chart.css">
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
<body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <script type="text/javascript">
         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);
   
         function drawChart() {
   
           var data = google.visualization.arrayToDataTable([
             ['Category', 'Quantity'],
             <?php
             $sql = "SELECT * FROM homechart";
             $fire = mysqli_query($con,$sql);
               while($result = mysqli_fetch_assoc($fire)){
                 echo"['".$result['category']."',".$result['quantity']."],";
               }
             ?>
             ]);
   
           var options = 
           {
             title: 'Stock Vegetables'
           };
   
           var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
   
           chart.draw(data, options);
         }
       </script>   
   
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <script type="text/javascript">
         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);
   
         function drawChart() {
   
           var data = google.visualization.arrayToDataTable([
             ['category', 'quantity'],
             <?php
             $sql = "SELECT * FROM homechart2";
             $fire = mysqli_query($con,$sql);
               while($result = mysqli_fetch_assoc($fire)){
                 echo"['".$result['category']."',".$result['quantity']."],";
               }
             ?>
             ]);
   
           var options = 
           {
             title: 'Need Vegetables'
           };
   
           var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
   
           chart.draw(data, options);
         }
       </script>  
       
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <script type="text/javascript">
         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);
   
         function drawChart() {
   
           var data = google.visualization.arrayToDataTable([
             ['Category', 'Quantity'],
             <?php
             $sql = "SELECT * FROM homechart3";
             $fire = mysqli_query($con,$sql);
               while($result = mysqli_fetch_assoc($fire)){
                 echo"['".$result['category']."',".$result['quantity']."],";
               }
             ?>
             ]);
   
           var options = 
           {
             title: 'Stock Fruits'
           };
   
           var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
   
           chart.draw(data, options);
         }
       </script>   
   
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <script type="text/javascript">
         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);
   
         function drawChart() {
   
           var data = google.visualization.arrayToDataTable([
             ['Category', 'Quantity'],
             <?php
             $sql = "SELECT * FROM homechart4";
             $fire = mysqli_query($con,$sql);
               while($result = mysqli_fetch_assoc($fire)){
                 echo"['".$result['category']."',".$result['quantity']."],";
               }
             ?>
             ]);
   
           var options = 
           {
             title: 'Need Fruits'
           };
   
           var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
   
           chart.draw(data, options);
           
         }
           
         
       </script>  
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
           
           <div id="piechart1" style="width: 900px; height: 500px; margin-left: -100px; margin-top: 50px;"></div>
           <div id="piechart2" style="width: 900px; height: 500px; margin-left: 550px; margin-top: -500px"></div>
           <div id="piechart3" style="width: 900px; height: 500px; margin-left: -100px;margin-top: 50px;"></div>
           <div id="piechart4" style="width: 900px; height: 500px; margin-left: 550px; margin-top: -500px"></div>
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

           
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Category', 'Quantity'],
             <?php
             $sql = "SELECT * FROM wasted_vegetables";
             $fire = mysqli_query($con,$sql);
               while($result = mysqli_fetch_assoc($fire)){
                 echo"['".$result['category']."',".$result['quantity']."],";
               }
               ?>
        ]);

        var options = {
          title: 'Wasted Vegetables',
          hAxis: {title: 'Vegetables',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
 
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
    <br>
    <br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Category', 'Quantity'],
             <?php
             $sql = "SELECT * FROM wasted_fruits";
             $fire = mysqli_query($con,$sql);
               while($result = mysqli_fetch_assoc($fire)){
                 echo"['".$result['category']."',".$result['quantity']."],";
               }
               ?>
        ]);

        var options = {
          title: 'Wasted Fruits',
          hAxis: {title: 'Fruits',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }
    </script>
 
    <div id="chart_div1" style="width: 100%; height: 500px;"></div>
  

       
       
    
    
</body>
</html>