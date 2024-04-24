<?php

include 'connect.php';
extract($_POST);

if (isset($_POST['submit'])) {
   $FirstName = $_POST['FirstName'];
   $email = $_POST['email'];
   $LastName = $_POST['LastName'];
   $password = $_POST['password'];

$sql = "INSERT INTO signup (FirstName, email, LastName, password) VALUES ('$FirstName', '$email', '$LastName', '$password')";
   $result=mysqli_query($con,$sql);

   if ($result) {
    echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='SignUp_index.php'; </script>";
} else {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
}

}
?>


<!DOCTYPE html>
<html>
   <head>
      <title>Signup</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="asset/css/style.css" />
      <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.css" />
      <link rel="stylesheet" type="text/css" href="asset/css/animate.css" />
      <link rel="stylesheet" type="text/css" href="asset/css/hover.css" />
   </head>
   <body>
      <div class="signup-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-offset-2 col-lg-3 col-md-offset-2 col-md-4 col-sm-6">
                  <div class="signup-box">
                     <p class="text-center">
                        <a href=""><img src="asset/images/logo.png" class="logo" alt=""></a>
                     </p>
                     <form action="signup.php" method="post">
                     <div class="form-group has-feedback">
                        <span class="fa fa-user-o form-control-feedback"></span>
                        <input type="text" name="FirstName" class="form-control customInput" id="FirstName" placeholder="Shehar Yar" autocomplete="off">
                     </div>
                     <div class="form-group has-feedback">
                        <span class="fa fa-envelope-o form-control-feedback"></span>
                        <input type="email" name="email" class="form-control customInput" id="email" placeholder="shehar@next-x.com.au" autocomplete="off">
                     </div>
                     <div class="form-group has-feedback">
                        <span class="fa fa-user-plus form-control-feedback"></span>
                        <input type="text" name="LastName" class="form-control customInput" id="LastName" placeholder="sheharyar" autocomplete="off">
                     </div>
                     <div class="form-group has-feedback">
                        <span class="fa fa-globe form-control-feedback"></span>
                        <input type="text" id="password" name="password" class="form-control customInput" placeholder="***************" autocomplete="off">
                     </div>
                     <p>
                        <button type="submit" class="btn btn-red" name="submit" >Create Account</button>
                       
                     </p>
                     <p>
                        Already have an account? <a href="index.html">Login</a>  
                     </p>
                     </form>
                     <p class="terms-condition">
                        By logging in to the Cherry Hill Coolstores platform you agree to our <a href=""> Terms & Conditions</a> & <a href=""> Privacy Policy</a>
                     </p>
                  </div>
               </div>
               <!-- col -->
               <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="slider-box">
                     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                           <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                           <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                           <div class="item active">
                              <img src="asset/images/carrot.png" alt="...">
                              <div class="">
                                 <h4>Baby Steps Count</h4>
                                 <p>
                                    One step forward at a time
                                 </p>
                              </div>
                           </div>
                           <div class="item">
                              <img src="asset/images/carrot.png" alt="...">
                              <div class="">
                                 <h4>Baby Steps Count</h4>
                                 <p>
                                    One step forward at a time
                                 </p>
                              </div>
                           </div>
                           <div class="item">
                              <img src="asset/images/carrot.png" alt="...">
                              <div class="">
                                 <h4>Baby Steps Count</h4>
                                 <p>
                                    One step forward at a time
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- slider-box -->
               </div>
            </div>
            <!-- row -->
         </div>
      </div>
      <!-- signup-section -->
      <script type="text/javascript" src="asset/js/jquery.js"></script>
      <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="asset/js/index.js"></script>
      <script type="text/javascript" src="asset/js/wow.js"></script>
   </body>
</html>