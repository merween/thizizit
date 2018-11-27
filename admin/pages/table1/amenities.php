<?php 


include '../connect.php';

$user_id = $_POST['user_id'];
$query = mysqli_query($connect, "SELECT * FROM hotel_registration where hotel_id = '$user_id'");
$room_amenities = mysqli_query($connect, "SELECT * FROM room_facility where room_id = '$user_id'");
$amenities = mysqli_query($connect, "SELECT * FROM activities");
$row = mysqli_fetch_array($query);
$name = $row['hotel_name'];
$hotel_name = $row['business_type'];
 ?>
 <label>Hotel Name: </label> 
 <span><?php echo $name; ?></span><br />
 <label>Type of Business: </label> 
 <span><?php echo $name; ?></span>
 <hr />
 <label>ROOM AMENITIES</label><br />
 <?php while($row = mysqli_fetch_array($room_amenities)) { ?>

 <span class="label label-info"><?php echo $row['facility']; ?></span>

<?php } ?>
<br /><br />
<form action="server.php" method="post">
<label id="label_chk">Select Room Amenities</label>
     <?php while ($row = mysqli_fetch_array($amenities)) { ?> 
      <div class="checkbox">
      <label><input type="checkbox" name="amenities[]" value="<?php echo $row['activity_name']; ?>"><img src="../amenities_image/<?php echo $row['image']; ?>" width="15px" height= "15px">&nbsp; <?php echo $row['activity_name']; ?></label>
      <input type="hidden" name="text_id" value="<?php echo $user_id; ?>">
	  </div>
<?php } ?>

<div class="modal_buttons">
    <button class="btn btn-primary btn-block">Submit</button>
	<button type="button" class="btn btn-default btn-block cls">Close</button>
</div>
</form>

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
        $("#house_rules").fadeOut();
    });
});
</script>
