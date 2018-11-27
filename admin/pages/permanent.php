<?php

include 'connect.php';
$user_id = $_POST['user_id'];
$delete = mysqli_query($connect, "DELETE FROM room_archives where room_id = '$user_id'");
echo "Data Deleted!";
?> 