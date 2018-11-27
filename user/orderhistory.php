<!DOCTYPE html>
<?php
include("index2.php");
?>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBukmo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/orderhistory.css">
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
            
            <li class="nav-item">
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
	
	
	<div id="center_column" class="center_column col-xs-12 col-sm-12">
	<br><br><br><br>
	<h1 class="page-heading bottom-indent">Order history <i class='far fa-clipboard' style='font-size:30px;color:#00457d'></i></h1> 
	<p class="info-title">Here are the orders you've placed since your account was created.</p>
	
	<div class="block-center" id="block-history">
	
	<table id="order-list" class="table table-bordered footab footable-loaded footable tablet breakpoint">
		<thead>
			<tr>
				<th class="first_item footable-first-column" data-sort-ignore="true">Order reference</th>
				<th class="item footable-sortable">Date<span class="footable-sort-indicator"></span></th>
				<th data-hide="phone" class="item footable-sortable">Total price<span class="footable-sort-indicator"></span></th>
				<th data-hide="phone" class="item footable-sortable">Due Price<span class="footable-sort-indicator"></span></th>
				<th data-sort-ignore="true" data-hide="phone,tablet" class="item" style="display: none;">Payment</th>
				<th class="item footable-sortable">Status<span class="footable-sort-indicator"></span></th>
				<th class="item footable-sortable footable-last-column">Refund Status<span class="footable-sort-indicator"></span></th>
				<th data-sort-ignore="true" data-hide="phone,tablet" class="item" style="display: none;">Invoice</th>
				<th data-sort-ignore="true" data-hide="phone,tablet" class="last_item" style="display: none;">&nbsp;</th></tr></thead>
				
				<tbody>
				<tr class="first_item ">
				<td class="history_link bold footable-first-column">
					<span class="footable-toggle"></span>
					<a class="color-myaccount" href="javascript:showOrder(1, 8, 'https://demo.qloapps.com/en/index.php?controller=order-detail');"> RYMPZFTVE </a></td>
					<td data-value="20180918050139" class="history_date bold"> 09/18/2018</td>
					<td class="history_price" data-value="8000.000000"> <span class="price"> $8,000.00 </span></td>
					<td class="history_price" data-value="0"> <span class="price"> $0.00 </span></td>
					<td class="history_method" style="display: none;">Bank wire</td>
					<td data-value="2" class="history_state"> <span class="label dark" style="background-color:#32CD32; border-color:#32CD32;"> Payment accepted </span></td>
					<td class="history_refund _status footable-last-column"><p class="ref_req_reject"> Rejected Requests : 1</p></td>
					<td class="history_invoice" style="display: none;"> 
					<a class="link-button" href="https://demo.qloapps.com/en/index.php?controller=pdf-invoice&amp;id_order=8" title="Invoice" target="_blank"> <i class="icon-file-text large"></i>PDF </a></td>
					<td class="history_detail" style="display: none;">
					<a class="btn btn-default button button-small" href="javascript:showOrder(1, 8, 'https://demo.qloapps.com/en/index.php?controller=order-detail');"> <span> Details<i class="icon-chevron-right right"></i> </span> </a></td></tr>
					<tr class="item alternate_item">
					<td class="history_link bold footable-first-column">
					<span class="footable-toggle"></span> 
					
					<a class="color-myaccount" href="javascript:showOrder(1, 7, 'https://demo.qloapps.com/en/index.php?controller=order-detail');"> FPZMKDLQD </a></td>
					<td data-value="20180918045524" class="history_date bold"> 09/18/2018</td><td class="history_price" data-value="13500.000000"> <span class="price"> $13,500.00 </span></td>
					<td class="history_price" data-value="12150"> <span class="price"> $12,150.00 </span></td><td class="history_method" style="display: none;">Bank wire</td>
					<td data-value="10" class="history_state"> <span class="label" style="background-color:#4169E1; border-color:#4169E1;"> Awaiting bank wire payment </span></td>
					<td class="history_refund _status footable-last-column"> --</td><td class="history_invoice" style="display: none;"> -</td>
					<td class="history_detail" style="display: none;"> 
					<a class="btn btn-default button button-small" href="javascript:showOrder(1, 7, 'https://demo.qloapps.com/en/index.php?controller=order-detail');"> <span> Details<i class="icon-chevron-right right"></i> </span> </a></td></tr><tr class="last_item ">
					<td class="history_link bold footable-first-column"><span class="footable-toggle"></span> 
					<a class="color-myaccount" href="javascript:showOrder(1, 6, 'https://demo.qloapps.com/en/index.php?controller=order-detail');"> YGSPZENOO </a></td>
					<td data-value="20180918045248" class="history_date bold"> 09/18/2018</td><td class="history_price" data-value="9000.000000"> <span class="price"> $9,000.00 </span></td>
					<td class="history_price" data-value="0"> <span class="price"> $0.00 </span></td>
					<td class="history_method" style="display: none;">Bank wire</td><td data-value="2" class="history_state">
					<span class="label dark" style="background-color:#32CD32; border-color:#32CD32;"> Payment accepted </span></td>
					<td class="history_refund _status footable-last-column"><p class="ref_req_wait"> Waitting Requests : 1</p>
					<p class="ref_req_refund"> Refunded Requests : 1</p></td><td class="history_invoice" style="display: none;"> 
					<a class="link-button" href="https://demo.qloapps.com/en/index.php?controller=pdf-invoice&amp;id_order=6" title="Invoice" target="_blank">
					<i class="icon-file-text large"></i>PDF </a></td>
					<td class="history_detail" style="display: none;"> 
					<a class="btn btn-default button button-small" href="javascript:showOrder(1, 6, 'https://demo.qloapps.com/en/index.php?controller=order-detail');"> 
					<span> Details<i class="icon-chevron-right right"></i> </span> </a></td></tr>
					</tbody>
					</table>
	
	</div>
	</div>


   








 

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