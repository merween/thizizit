<?php include("index2.php");?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBukmo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/cart.css">
	
	
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
	
	

	

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
            
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="myaccount.php"><?php echo "welcome $db_username !"; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	


	
	<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">

		
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Room Image</th>
						<th>Room Name</th>
						<th>Beds</th>
						
						<th>Room Capacity</th>
						<th>Unit Price</th>
						
                        <th>Quantity</th>
                        <th class="text-center">Check-in Date</th>
						<th class="text-center">Check-out Date</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                           
                        </div></td>
						
						<td class="col-sm-1 col-md-1 text-center"><strong>RoomNameSample</strong></td>
						
                        <td class="col-sm-1 col-md-1 text-center"><strong>3</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>2 Adults, 2 Children</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
						<td class="col-sm-1 col-md-1 text-center"><strong>3</strong></td>
						<td class="col-sm-1 col-md-1 text-center"><strong>21-11-2018</strong></td>
						<td class="col-sm-1 col-md-1 text-center"><strong>22-11-2018</strong></td>
						<td class="col-md-1 text-center"><strong>$9.98</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                    <tr>
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                            
                        </div></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>RoomNameSample</strong></td>
						<td class="col-sm-1 col-md-1 text-center"><strong>3</strong></td>
                        <td class="col-md-1 text-center"><strong>2 Adults, 2 Children</strong></td>
                        <td class="col-md-1 text-center"><strong>$9.98</strong></td>
						<td class="col-sm-1 col-md-1 text-center"><strong>3</strong></td>
						<td class="col-sm-1 col-md-1 text-center"><strong>21-11-2018</strong></td>
						<td class="col-sm-1 col-md-1 text-center"><strong>22-11-2018</strong></td>
						<td class="col-md-1 text-center"><strong>$9.98</strong></td>
                        <td class="col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>$24.59</strong></h5></td>
                    </tr>
                    
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$31.53</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="navbar-cart" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
       <li>
        <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
         <span class="glyphicon glyphicon-shopping-cart"></span>
         <span class="badge"></span>
         <span class="total_price">$ 0.00</span>
        </a>
       </li>
      </ul>
     </div>
</div>

	
	
	
	
	
  
 







<footer class="footer">
    <div class="container1">
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
	
	</div>
</footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>


</html>