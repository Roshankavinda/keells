<?php
   //header.php
   include('regheader.php');
?>

    <!-- registration area-->
    <section id="register">
       <table style="width: 100%; height:100%;">
          <tr>
          <td style="width: 100px; height:500px;">
             <img src="/keells/images/keellslogo2.png" style="width: 300px; height:625px;" class="logo img" alt="logo" >
          </td>
          <td>
            <div class="row m-0">
            <div class="col-lg-4 offset-lg-2">
               <div class="text-center pb-5">
               <h1 class="login-title text-dark">Registration</h1>
               <p class="p-1 m-0 font-ubuntu text-black-50">GET! Best Prices For Your Harvest From Keells</p>
               <span class="font-ubuntu text-black-50">I already have <a href="login.php">Login</a></span>
               </div>
               
               <div class="d-flex justify-content-center">
                  <form action="register_process.php" method="post" enctype="multipart/form-data" id="reg-form"> 
                     <div class="form-row">
                        <div class="col">
                           <input type="text"  name="userName" id="userName" class="form-control" placeholder="User Name*">
                        </div>
                        <div class="col">
                           <input type="text"  name="nicNumber" id="nicNumber" class="form-control" placeholder="NIC Number*">
                        </div>
                     </div>

                     
                     <div class="form-row my-4">
                     <div class="col">
                           <input type="password" required name="password" id="password" class="form-control" placeholder="Password*">
                        </div>
                     </div>

                     

                     <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5"  name="submit">Continue</button>
                     </div>
                  </form>
               </div>
            </div>
            </div>
         

          </td>
   </tr>
       </table>
     </section>
    <!-- #registration area-->
           
             
            
<?php
   //footer.php
   include('regfooter.php');
?>