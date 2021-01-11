<?php 

$username1 =$_GET['username'];


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

$sql = "SELECT * FROM  keells_admin WHERE  userName= '$username1' ";
$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));


while($res = mysqli_fetch_array($result)) {  
	
	
	$type =$res['type'];

 

}


$sql2 = "SELECT * FROM  user ";
$result2 = mysqli_query($conn, $sql2) or die( mysqli_error($conn));

   

$sql4 = "select count(1) FROM user";
$result4 = mysqli_query($conn, $sql4) or die( mysqli_error($conn));
$row4 = mysqli_fetch_array($result4);
$total4 = $row4[0];

$sql5 = "select count(1) FROM oder";
$result5 = mysqli_query($conn, $sql5) or die( mysqli_error($conn));
$row5 = mysqli_fetch_array($result5);
$total5 = $row5[0];

$sql6 = "select count(1) FROM homechart";
$result6 = mysqli_query($conn, $sql6) or die( mysqli_error($conn));
$row6 = mysqli_fetch_array($result6);
$total6 = $row6[0];

$sql7 = "select count(1) FROM homechart3";
$result7 = mysqli_query($conn, $sql7) or die( mysqli_error($conn));
$row7 = mysqli_fetch_array($result7);
$total7 = $row7[0];

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/admin.css" rel="stylesheet">

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
    
    <a href="/keells/index.php" style="background:#478541 ;" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span> Log out</a>
  </nav>
  <body id="page-top">

   

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-map.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Orders</span></a>
        </li>
        <li class="nav-item">
        <?php
        if ($type == "keells")
            {
          echo	"<div class='list-group-item list-group-item-action bg-light' id='sky2' >";
          echo	"<h5 id='s'>Message</h5>";
          echo	"<div class='bubble bubble-bottom-left'  contenteditable>";
          echo	"<select class='input' name='type'>";
        while($res2 = mysqli_fetch_array($result2)) {  
          echo 	"<option value=".$res2['userName'].">".$res2['userName']. "</option>";
            }
          echo"</select>";
          echo  "</div>";
          echo "<input type='text' name='' placeholder='type..' id='sky5' class='list-group-item list-group-item-action bg-light'></a>";
          echo  " <a href='#' id 'roshan' class='myButton' onclick='myFunction3()'  >   Send </a>";
          echo "  </div>";
          echo " " ;
            }
        else{
          echo "";
            }
        ?>
        </li>
     
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                  <div class="mr-5"></div>
                  <div id="ID40">
		                 <span><?php echo  $total4 ; ?></span>
                  </div>
                  <div id="New_Famers">
		                 <span>All Users</span>
                	</div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5"></div>
                  <div id="ID40">
		                 <span><?php echo  $total5 ; ?></span>
                  </div>
                  <div id="orders">
		                 <span>Total Orders</span>
                	</div>
                </div>
                
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5"></div>
                  <div id="ID40">
		                 <span><?php echo  $total6 ; ?></span>
                  </div>
                  <div id="vegetables">
		                 <span>Total Vegetables</span>
                	</div>
                </div>
               
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5"></div>
                  <div id="ID40">
		                 <span><?php echo  $total7 ; ?></span>
                  </div>
                  <div id="orders">
		                 <span>Total Fruits</span>
                	</div>
                </div>
                
              </div>
            </div>
          </div>
        </div> 



<section>

<table style="width:100%;border: 1px solid black;border: 1px solid black;border-collapse: collapse;border-spacing: 5px;" class="sky">
  <tr>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Name</th>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Phone</th>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Quantity</th>
    <th style="width:50px;border: 1px solid black;border: 1px solid black;border-collapse: collapse;padding: 10px;text-align: center;">Category</th>
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
								
 

									$sql = "SELECT * FROM  oder  ";
									$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
 
 
	 
									while($res = mysqli_fetch_array($result)) {         
									 echo "<tr>";
									 echo "<td  >".$res['name']."</td>";
									 echo "<td  >".$res['phone']."</td>";  
									 echo "<td  >".$res['category']."</td>"; 
									 echo "<td  >".$res['id']."</td>"; 
									   }                                
     ?>





</table>






</section>

               <div class="footer-bttom">
                 <p2>Copyright © 2021 Jaykay Marketing Services (Pvt) Ltd. All Rights Reserved</p2>
                 
               </div>
            

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
