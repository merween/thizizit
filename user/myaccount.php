<!DOCTYPE html>

<?php
include ("index2.php");
?>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBukmo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/myaccount.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	

	

</head>

<body><!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
	  <i class='fas fa-map-marker-alt' style='font-size:36px;color:#00457d'></i>
        <a class="navbar-brand" href="#"> &nbsp iBUKMO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span></span> <class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           
            
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
           
			<li class="nav-item">
              <a class="nav-link" href="myaccount.php"><?php echo "welcome $db_username !";?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <section class="account">
	<div id="center_column" class="center_column col-xs-12 col-sm-12">
	<a href ="myaccount.php">
	<h1 class="page-heading">My account</h1>
	</a>
	<hr>
	<p class="info-account">Welcome to your account. Here you can manage all of your personal information and orders.</p>
	<div class="row addresses-lists">
	<div class="col-xs-12 col-sm-6 col-lg-4">
	<ul class="myaccount-link-list">
	<li><a href="orderhistory.php" title="Orders">
	<i class='fas fa-clipboard-list' style='font-size:30px;color:#007bff'></i>
	<span>Order history and details</span></a></li>
	
	<li><a href="orderhistory.php" title="Credit slips">
	<i class='far fa-file' style='font-size:30px;color:#007bff'></i>
	<span>My credit slips</span></a></li>
	
	<li><a href="orderhistory.php" title="Addresses">
	<i class='far fa-building' style='font-size:30px;color:#007bff'></i>
	<span>My addresses</span></a></li>
	
	<li><a href="orderhistory.php" title="Information">
	<i class='far fa-user-circle' style='font-size:30px;color:#007bff'></i>
	<span>My personal information</span></a></li></ul></div></div>
	

	
	
	</section>








 

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5><i class="fa fa-road"></i>Contact With Us</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><strong>Phone :</strong>+94 (65)222-44-55</li>
                            <li><strong>Email :</strong><a href=""> info@lakbayhub.com</a></li>
                            <li><strong>Address :</strong> Dasmariñas, Cavite</li>
                           
                        </ul>
                    </div>
                    <div class="col-6">
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
            <div class="col-md-5">
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
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>