<?php
$con = mysqli_connect("localhost", "root", "", "keells");
if($con){
  echo "";
}
?>
<html>
<head>
  <title>Keells</title>

  <link rel="stylesheet" type="text/css" href="css/index.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
     <header class="header">
       <nav class="navbar navbar-style">
         <div class="container">
           <div class="navbar-header">
           
            <a href=""><img class="logo" src="images/keellslogo.png"></a>
          </div>
           
           <ul class="nav justify-content-end">
            <li><a class="nav-link" href="#">HOME</a></li>
            <li><a class="nav-link" href="#">ABOUT US</a></li>
            <li><a class="nav-link" href="#">CONTACT US</a></li>
            </ul>
          </div>
         </div>
       </nav>
        
       <div class="container">
       <div class="row">

            <div class="col-sm-6 banner-info">
                 <h1></h1>
                 <p class="big-text">GET! Best Prices For Your Harvest From Keells</p>
                 <p>We like to buy your goods and quality harvest with best prices. 
                   So you can join with us and get a best value to your harvest.
                 </p>
                 <a class="btn btn-first" href="/keells/register_login/login.php">Login</a>
                 <a class="btn btn-second" href="/keells/register_login/register.php">Register</a>
            </div>

            <div class="col-sm-6 banner-image">
              <img class="img-fluid" src="images/unnamed.jpg" class="float-right">
            </div>
       </div>  
       </div>

       <div id="demo" class="carousel slide" data-ride="carousel">

        
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
      
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/Slider 1.jpg" alt="">
          </div>

          <div class="carousel-item">
            <img src="images/Slider 2.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img src="images/Slider 3.jpeg" alt="">
          </div>
        </div>
      
       
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      
      </div>
      <br/>
      <h2 style="width: 900px; height: 500px; margin-left: 550px;color:#4CC417;font-size:100px">Keells</h2>
      <p style="width: 900px; height: 500px;text-align: center;margin-left: 250px;margin-top:-380px;font-weight: bold;color:black;font-size:20px">Keells is proudly Sri Lankan, owned and operated over the last 25 years, delivering the freshest quality products, 
        along with great value, serving thousands of Sri Lankans every day.Keells was also the first retailer in Sri Lanka to commit to reduce by 50%, single use polythene bag and instore prepared food packaging by the year 2025, ensuring that as the business grows the impact on the environment is minimized and sustainable practices employed. 
        Over 57 of our stores also use solar power relying more on renewable sources of energy as another initiative towards being sustainable.</p>
        <br/>
        <h1 style="margin-top:-250px;color:black;background-color:#4CC552;">Our Reports</h1>
       
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
        
        <div id="piechart1" style="width: 900px; height: 500px; margin: 0px;"></div>
        <div id="piechart2" style="width: 900px; height: 500px; margin-left: 650px; margin-top: -500px"></div>
        <div id="piechart3" style="width: 900px; height: 500px; margin: 0px"></div>
        <div id="piechart4" style="width: 900px; height: 500px; margin-left: 650px; margin-top: -500px"></div>
        <div class="footer-main-div">

    <div  class="footer-social-icons">
       <ul>
       <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
       <li><a href="#"><span class="fab fa-twitter"></span></a></li>
       <li><a href="#"><span class="fab fa-instagram"></span></a></li>
       <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
       </ul>
       </div>
    </br>
       <div class="footer-menu-one">
         <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="index.php">About us</a></li>
           <li><a href="#">Services</a></li>
           <li><a href="#">Contact us</a></li>
         </ul>
       </div>

       </div> 
       <div class="footer-bttom">
         <p2>Copyright © 2020 Jaykay Marketing Services (Pvt) Ltd. All Rights Reserved</p2></br><p2><a href="">Admin Login</a></p2>
         
       </div>
      </header>
</body>
</html>