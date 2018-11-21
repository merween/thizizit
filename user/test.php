<?php

$datediff =0;


//here
include("../connections.php");

$room = $_POST['roomID'];

  $get_record = mysqli_query($connections, "SELECT * FROM rooms WHERE room_id ='$room'");

   while ($row_edit = mysqli_fetch_assoc($get_record)){
  $db_roomname = $row_edit["room_name"];
  $db_desc = $row_edit["description"];
  $db_adult = $row_edit["adult"];
  $db_child = $row_edit["child"];
  $db_price = $row_edit["price"];
  $db_amenities = $row_edit["roomamenities"];
  $db_beds = $row_edit["beds"];
  $db_pools = $row_edit["pools"];
   $db_img = $row_edit["room_img"];


}

///eto na yn? yes po
//ok so need natin ang room id though
//isama natin yung room id sa ajax mo,puta di nasave

if(isset($_POST['DateDiff']) && $_SERVER['REQUEST_METHOD']=='POST'){
$datediff = $_POST['DateDiff'];

}

//san ko itete4st?

$total = $datediff * $db_price; //ganyan


echo json_encode(['total'=>$total]);

//sali mo yung mga queries pano ang pagkuha ng db price
//sige po sige po. try ko ulit hehehehe thanks po ulit sa abala <3

//paste mo dito kung anong code para magakalaman uyang $db_price mo