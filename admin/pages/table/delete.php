<?php

include '../connect.php';

$user_id = $_POST['user_id'];


$archives = mysqli_query($connect, "INSERT INTO room_archives (room_id, hotel_id, room_name, description, adult, child, price, beds, pools, image, image1, image2, type_of_room)
SELECT room_id, hotel_id, room_name, description, adult, child, price, beds, pools, image, image1, image2, type_of_room
FROM rooms
WHERE room_id = '$user_id'");

$delete = mysqli_query($connect, "DELETE FROM rooms where room_id = '$user_id'");
echo "Data Deleted!";


?> 