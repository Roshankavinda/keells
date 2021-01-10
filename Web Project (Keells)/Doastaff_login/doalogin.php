<?php
   //doalogin_header.php
   include('doalogin_header.php');
?>

    <!-- registration area-->
    <section id="doa-login">
       <table style="width: 100%; height:100%;">
          <tr>
          <td style="width: 100px; height:500px;">
             <img src="/keells/images/keellslogo2.png" style="width: 300px; height:625px;" class="logo img" alt="logo" >
          </td>
          <td>
            <div class="row m-0">
            <div class="col-lg-4 offset-lg-2">
               <div class="text-center pb-5">
               <h1 class="login-title font-ubuntu text-dark">DOA Login</h1>
               </div>
               
               <div class="d-flex justify-content-center">
                  <form action="login_process.php" method="post" enctype="multipart/form-data" id="log-form"> 
                     <div class="form-row">
                        <div class="col">
                           <input type="text"  name="userName" id="userName" class="form-control" placeholder="User Name*">
                        </div>
                        
                     </div>

                     
                     <div class="form-row my-4">
                     <div class="col">
                           <input type="password" required name="password" id="password" class="form-control" placeholder="Password*">
                        </div>
                     </div>

                     

                     <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5"  name="submit">Login</button>
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
   //doalogin.footer.php
   include('doalogin.footer.php');
?>