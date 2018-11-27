<?php 

include '../connect.php';

$test = $_POST['amenities'];
$text_id = $_POST['text_id'];


if (isset($_POST['amenities'])) {
    $delete = mysqli_query($connect, "DELETE FROM room_amenities where room_id = '$text_id'");
	$type = mysqli_query($connect, "SELECT * FROM type_of_room");
	$row = mysqli_fetch_array($type);
	$type_name = $row['type_name'];
	foreach ($test as $test1)
{
	$amenities_check = mysqli_query($connect, "INSERT INTO room_amenities (room_id, amenities) VALUES ('$text_id', '$test1')");
}
header("Location: index.php?type=".$type_name."");
}
else
{
	header("Location: asd.php?type=".$type_name."");
}



 ?>