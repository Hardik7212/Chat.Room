
<?php
session_start();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" type="text/css" href="style.css">

<div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="" method="post"   style="display: block;">
                  <div class="form-group">
                    <input type="text" name="uname" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
                  </div>
                
                
                  <div class="form-group">
                    <input type="password" name="pass" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form id="register-form" action="signupq.php" method="post"  style="display: none;">
                  <div class="form-group">
                    <input type="text" name="uname" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                    <div class="form-group">
                    <input type="text" name="age" id="age" tabindex="1" class="form-control" placeholder="Age" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Mobile Number" value="" required="">
                  </div>
                    <div class="form-group">
                     <label for="gender" class="col-md-4 col-form-label ">Gender: </label>
                                    <div class="col-md-8">
                    
                         <input type="radio" id="male" name="gender" value="male" required>
                         <label for="male">Male </label>
                         <input type="radio" id="female" name="gender" style="margin-left: 10px;" value="female" required>
                        <label for="female">Female</label>
                  </div>
                </div><br><br>
                  
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="signup" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    
    $(function() {

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});

  </script>





<?php


include("connection.php");

if(isset($_POST["uname"]) and isset($_POST["pass"])){

$uname=$_POST["uname"];
$pass=$_POST["pass"];

$query="select * from users where username='$uname' and password='$pass'";

$result=mysqli_query($con,$query)or die(mysqli_error($con));

$count=mysqli_num_rows($result);


if($count>0)
{
   $_SESSION['uname']=$uname;
       echo "<script>window.location.href='index.php'</script>";

}
else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";


}

    

}




?>


 