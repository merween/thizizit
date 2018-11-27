<?php

include 'connect.php';

$user_id = $_POST['user_id'];


$archives = mysqli_query($connect, "INSERT INTO room_archives (room_id, hotel_id, room_name, description, adult, child, price, roomamenities, beds, pools, room_img)
SELECT room_id, hotel_id, room_name, description, adult, child, price, roomamenities, beds, pools, room_img
FROM rooms
WHERE room_id = '$user_id'");

$delete = mysqli_query($connect, "DELETE FROM rooms where room_id = '$user_id'");
echo "Data Deleted!";
?> 