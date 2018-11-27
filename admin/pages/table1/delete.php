<?php

include '../connect.php';

$user_id = $_POST['user_id'];


$delete = mysqli_query($connect, "DELETE FROM hotel_registration where hotel_id = '$user_id'");

$delete1 = mysqli_query($connect, "DELETE FROM rooms where hotel_id = '$user_id'");
echo "Data Deleted!";


?> 