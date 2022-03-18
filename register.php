
<?php
echo $_POST['firstname'] . '<br>';
echo $_POST['lastname'] . '<br>';
echo $_POST['email'] . '<br>';
echo $_POST['dateofbirth'] . '<br>';
echo $_POST['password'] . '<br>';
echo $_POST['confirmpassword'] . '<br>';

include_once 'layout/head.php'; 
  include_once 'layout/nav.php';
require_once 'app/'
  user = new User();

  $user->createUser();

  $user->login();
?>

<h1 align="center">Account Redister</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">first name</label>
                <input type="student email" name="firstname" class="form-control" id="enter your email">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">last name</label>
                <input type="password" name="lastname" class="form-control" id="exampleFormControlInput1">
              </div>
        
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">email</label>
                <input type="text" name="email" class="form-control" id="exampleFormControlInput1">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" id="exampleFormControlInput1">
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
        <button class="btn btn-default dcsit-button-primary">Submit</button>
        
    </form>

   </section>
   <?php include_once 'layout/footer.php'; ?> 