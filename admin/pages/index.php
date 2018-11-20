<?php
session_start();

include("connect.php");

include("nav.php")




?>


<script type ="application/javascript">

	setInterval(function(){

		$('#addproduct').load('addproduct.php');
	},1000)

	</script>

	<div id ="addproduct">
		<?php include("addproduct.php");?>

	</div>