<?php 


include '../connect.php';

$user_id = $_POST['user_id'];
$query = mysqli_query($connect, "SELECT * FROM hotel_registration where hotel_id = '$user_id'");
$room_amenities = mysqli_query($connect, "SELECT * FROM room_facility where room_id = '$user_id'");
$amenities = mysqli_query($connect, "SELECT * FROM activities");
$row = mysqli_fetch_array($query);
$name = $row['hotel_name'];
$hotel_name = $row['business_type'];

$rules = mysqli_query($connect, "SELECT * FROM houserules where hotel_id = '$user_id'");
 ?>
 <label>Hotel Name: </label> 
 <span><?php echo $name; ?></span><br />
 <label>Type of Business: </label> 
 <span><?php echo $name; ?></span>
 <hr />
 <label>HOUSE RULES</label><br />
 <div class="rules_container1">
 <ol>
 <?php while($row = mysqli_fetch_array($rules)) { ?>

 <li style="padding: 1%;"><?php echo $row['rule']; ?> <button type="button" id="<?php echo $row['id']; ?>"class="btn btn-danger btn-xs delete_rules"><span class="glyphicon glyphicon-trash"> </span></button></li>

<?php } ?>
</ol>
</div>

<div class="form">
	<label>Enter Rule</label>
	<input type="text" id="text_rules" class="form-control"><br />
	<input type="hidden" id="text_id" class="form-control" value="<?php echo $user_id; ?>">
	<button class="btn btn-primary btn-block" onclick="return add()">Submit</button>
	<button type="button" class="btn btn-default btn-block cls">Close</button>
</div>
 <style type="text/css">
 .modal_buttons
 {
 	position: fixed;
 	top: 76.5%;
 	left: 1%;
 	width: 28%;
 	left: 36%;
 }
 </style>
<script type="text/javascript">
$(document).ready(function(){
    $(".cls").click(function(){
        $("#close_modal").fadeOut();
        $("#amenities_container").fadeOut();
    });
});
function add()
{
   var user_id = $("#text_id").val();
   var rule = $("#text_rules").val();
   $.ajax({
   url:"add_rule.php",
   method:"POST",
   data:{user_id:user_id, rule:rule},
   success:function(data)
   {
   	$(".rules_container1").html(data);
   }
  })
}

$(document).on('click', '.delete_rules', function(){
  var user_id = $(this).attr("id");
  $.ajax({
   url:"delete_rule.php",
   method:"POST",
   data:{user_id:user_id},
   success:function(data)
   {
   	$(".rules_container1").html(data);
   }
  })
 });

$(document).ready(function(){
    $(".cls").click(function(){
        $("#close_modal").fadeOut();
        $("#amenities_container").fadeOut();
        $("#house_rules").fadeOut();
    });
});
</script>
