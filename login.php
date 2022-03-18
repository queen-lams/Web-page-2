<?php
  include_once 'layout/head.php'; 
  include_once 'layout/nav.php';
?>
        
   <section class="container row" >
       <div class="col">
           <img src="./public/images/form-img.png" alt="">
       </div>

       <div class="col">

        <h1>ACCOUNT LOGIN</h1>
        <form action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email ads</label>
                <input type="student email" class="form-control" id="enter your email">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Paasword</label>
                <input type="password" class="form-control" id="exampleFormControlInput1">
              </div>
        

       <!--<-- remember me password -->

       <div class="remember-me row">
        <div class="mb-3 col" >
            <input type="checkbox" id="exampleFormControlInput1">
           <label for="exampleFormControlInput1" class="form-label">Remember me</label>
          
         </div>
         <a class="col" href="#">Forgot password</a>
       </div>

        </div>
        <button class="btn btn-default dcsit-button-primary">Login</button>
    </form>

   </section>
   <?php include_once 'layout/footer.php'; ?> 
    