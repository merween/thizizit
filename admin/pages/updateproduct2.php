<?php

include("connect.php");
$user_id = $_POST["user_id"];
$new_hotelid = $_POST["hotelid"];
$new_product = $_POST["productname"];
$new_beds = $_POST["beds"];
$new_adult = $_POST["adult"];
$new_child = $_POST["child"];
$new_description = $_POST["description"];
$new_price = $_POST["price"];
$new_amenities = $_POST["roomamenities"];


mysqli_query($connect, "UPDATE rooms SET hotel_id ='$new_hotelid' , room_name ='$new_product', beds ='$new_beds' ,description ='$new_description', price ='$new_price', adult ='$new_adult', child ='$new_child' , roomamenities ='$new_amenities' WHERE room_id = '$user_id'");

echo "<script language = 'javascript'>alert('record has been updated!')</script>";
header("location:addproduct.php");

 ?>