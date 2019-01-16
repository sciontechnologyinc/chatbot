
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fe Del Mundo Medical Center </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="include/login.inc.php" method="post">
              <h1>Login Form JET</h1>
              <?php 
                 if (isset($_GET['error'])) {
                  if ($_GET['error'] == "sqlerror") {
                  echo '<p class="text-danger"> Invalid username !<br> Please try again.</p>';
                 }
                   if ($_GET['error'] =="wrongpassword") {
                  echo '<p class="text-danger"> Invalid password !<br> Please try again.</p>';
                 }
}
              ?>
              <div>
                <input type="text" class="form-control" name="musern" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="mpass" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-success submit" name="login-submit" >Log in</button>
              
              </div>

              <div class="clearfix"></div>

              <div class="separator">
               
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>
                 <?php

                 
              
              if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                  echo '<p> Fill in all fields</p>';
                }

                elseif ($_GET['error'] == "invalidusername1") {
                   echo '<p class="text-danger"> Invalid Email or Username!</p>';                
              }
                elseif ($_GET['error'] == "invalidsusername") {
                   echo '<p class="text-danger"s>  Username already taken! Please try again.</p>';                
              }
                elseif ($_GET['error'] == "invaliduser-email") {
                   echo '<p class="text-danger"> Invalid Email! Please try again.</p>' ;               
              }
                 elseif ($_GET['error'] == "invalidnumber") {
                   echo '<p class="text-danger"> Mobile number must be 11 digit number.</p>' ;               
              }
                elseif ($_GET['error'] == "passwordchecked") {
                   echo '<p class="text-danger"> password do not match! Please try again.</p>';                
              }
                elseif ($_GET['error'] == "usertaken") {
                   echo '<p class="text-danger"> Username is already taken! Please try again.</p>';
                   }                
              }   if (isset($_GET['signup'])) {
              if ($_GET['signup'] == "success") {
               echo '<p class="text-success"> Account Successfully created!</p>';
              }

}
              ?>


                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="  fa fa-heartbeat"></i> Fe Del Mundo Medical Center</h1>
                  <p>©2019 All Rights Reserved. Fe Del Mundo Medical Center</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="include/signup.inc.php" method="POST">
              <h1>Create Account</h1>
                             <div>
                <input type="text" class="form-control" name="firstname" placeholder="First name" required="" />
              </div>
                <div>
                <input type="text" class="form-control" name="lastname" placeholder="Last name" required="" />
              </div>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name="user-email" placeholder="Email" required="" />
              </div>
               <div>
                <input type="text" class="form-control" name="mobilenum" placeholder="Enter mobile number" required="" />
              </div><br>
              <div>
                <input type="password" class="form-control" name="pass" placeholder="Password" required="" />
              </div>
                <div>
                <input type="password" class="form-control" name="rpass" placeholder="Repeat Password" required="" />
              </div>
              
              <div>
                <button class="btn btn-success submit" type="submit" name="signup-submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="login.php" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="  fa fa-heartbeat"></i> Fe Del Mundo Medical Center</h1>
                  <p>©2019 All Rights Reserved. Fe Del Mundo Medical Center</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
