<?php

include 'connect.php';

$user_id = $_POST['user_id'];


$delete = mysqli_query($connect, "DELETE FROM amenities where id = '$user_id'");
echo "Data Deleted!";
?> 