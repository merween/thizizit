<?php

include("connect.php");
$user_id = $_POST["user_id"];
$new_hotelid = $_POST["hotelid"];
$new_product = $_POST["productname"];
$new_description = $_POST["description"];
$new_price = $_POST["price"];
$new_amenities = $_POST["roomamenities"];


mysqli_query($connect, "UPDATE rooms SET hotel_id ='$new_hotelid' , room_name ='$new_product', description ='$new_description', price ='$new_price', roomamenities ='$new_amenities' WHERE room_id = '$user_id'");

echo "<script language = 'javascript'>alert('record has been updated!')</script>";
header("location:addproduct.php");

 ?>