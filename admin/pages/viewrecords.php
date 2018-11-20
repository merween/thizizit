<?php
session_start();

include("connect.php");

include("nav.php");
?>

<script type = "text/javascript" src= "js/jQuery.js"></script>

<script type ="application/javascript">

	setInterval(function(){

		$('#addproduct').load('addproduct.php');
	},1000);

	</script>


<?php

if(empty($_GET["getUpdate"])){




?>



	<div id ="addproduct">
		<?php include("addproduct.php");?>

	</div>
<?php



?>