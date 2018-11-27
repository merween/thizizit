<?php 

include 'connect.php';

$user_id = $_POST['text_room_id'];

$query = mysqli_query($connect, "SELECT * FROM room_amenities where room_id = '$user_id'");
 ?>

<label>Room Amenities</label><br /><br />
 <?php while($row = mysqli_fetch_array($query)) { ?>
<span class="amenities_span"><?php echo $row['room_id']; ?></span>


 <?php } ?>

<style type="text/css">
.amenities_span
{
	border: 1px solid #cccccc;
	color: #333;
	padding: 1%;
	margin-top: 1em;
}
</style>