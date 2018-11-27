<?php

include 'connect.php';

$user_id = $_POST['user_id'];


$delete = mysqli_query($connect, "DELETE FROM type_of_room where id = '$user_id'");
echo "Data Deleted!";
?> 