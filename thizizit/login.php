<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBukmo</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/half-slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body><nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Lakbay Hub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="register.php">Sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Log in</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="index1.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



<?php

$emailad = $password = "";
$emailErr = $passwordErr="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

If(empty($_POST["email"])){
$emailErr = "email is required";
}
else{
$emailad = $_POST["email"];

}

If(empty($_POST["passwd"])){
$passwordErr = "Password is required";
}
else{
$password = $_POST["passwd"];
}

}


if($emailad && $password){
include("connections.php");
$check_email = mysqli_query($connections, "SELECT * FROM registration WHERE emailad = '$emailad'");
$check_email_row = mysqli_num_rows($check_email);

if($check_email_row > 0){
               while ($row = mysqli_fetch_assoc($check_email)){

                $user_id = $row["id"];

                $db_password = $row["password"];
                $db_account_type = $row["account_type"];

                if($password == $db_password){
                    session_start();

                    $_SESSION["id"] = $user_id;

                    if($db_account_type == "1"){

                    echo"<script>window.location.href='admin/pages/hotelresort.php';</script>";
                }

                else{
                    echo "<script>window.location.href = 'user'; </script>";
                }



            }else{
                $passwordErr = "password is incorrect";
            }
        }


                }else{
                    $emailErr = "Email is not registered!";

                }

}

?>










<div class="columns-container">
    <div id="columns" class="container">
        <div id="slider_row" class="row">
            <div id="top_column" class="center_column col-xs-12 col-sm-12">   
            </div></div>
            <div class="row">
                <div id="center_column" class="center_column col-xs-12 col-sm-12">
                    <h1 class="page-heading">Authentication</h1>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <form action="login.php" method="post" id="create-account_form" class="box >
                                <h3 class="page-subheading">Not Registered yet?</h3>
        <div class="form_content clearfix">
            <p class="content">Please enter your email address to create an account.</p>
            <div class="alert alert-danger" id="create_account_error" style="display:none"></div>
            <div class="form-group"> 
                <label for="email_create" class="">Email address</label> 
                <input type="email" class="is_required validate account_input form-control" data-validate="isEmail" id="email_create" name="email_create" value="">
            </div><div class="submit"> 
                <input type="hidden" class="hidden" name="back" value="my-account"> 
                <button class="btn button button-medium" type="submit" id="SubmitCreate" name="SubmitCreate"> <span> <i class="icon-user left"></i> Create an account </span> </button> 
                <input type="hidden" class="hidden" name="SubmitCreate" value="Create an account">
            </div></div></form></div>
            

            <div class="col-xs-12 col-sm-6"><form action="login.php" method="post" id="login_form" class="box">




                <h3 class="page-subheading">Log in
        </h3>
        <div class="form_content clearfix"><div class="form-group"> 
            <label class="" for="email">Email address </label> 
            <input value="<?php echo $emailad?>" class="is_required validate account_input form-control" type="email" id="email" name="email">
            <span class="error"><?php echo $emailErr;?></span>
        </div>
            <div class="form-group"> 
                <label class="" for="passwd">Password </label> 
                <input value="" class="is_required validate account_input form-control" type="password" data-validate="isPasswd" id="passwd" name="passwd">
<span class ="error"><?php echo $passwordErr;?></span>
            </div>
                <p class="lost_password form-group">
                    <a href="" title="Recover your forgotten password" rel="nofollow">Forgot your password?</a></p>
                    <p class="submit"> 
                        <input type="hidden" class="hidden" name="back" value="my-account"> <button type="submit" id="SubmitLogin" name="SubmitLogin" class="btn button button-medium"> <span> <i class="icon-lock left"></i> Sign in </span> </button></p></div></form></div></div></div></div></div></div>
    <footer class="footer">

<div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h5><i class="fa fa-road"></i>Contact With Us</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><strong>Phone :</strong>+94 (65)222-44-55</li>
                            <li><strong>Email :</strong><a href=""> info@lakbayhub.com</a></li>
                            <li><strong>Address :</strong> Dasmariñas, Cavite</li>
                           
                        </ul>
                    </div>
                    <div class="col-2">
                        <ul class="list-unstyled">
                            <li><a href="">Documentation</a></li>
                            <li><a href="">Support</a></li>
                            <li><a href="">Legal Terms</a></li>
                            <li><a href="">About</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                </ul>
                <br>
            </div>
            <div class="col-md-2">
                <h5 class="text-md-right">Contact Us</h5>
                <hr>
            </div>
            <div class="col-md-4">
                <form>
                    <fieldset class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="button" class="btn btn-secondary-outline btn-lg">Send</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</footer>

	


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>