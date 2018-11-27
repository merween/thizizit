<?php

function upload_image()
{
 if(isset($_FILES["user_image"]))
 {
  $extension = explode('.', $_FILES['user_image']['name']);
  $new_name = rand() . '.' . $extension[1];
  $destination = './image/' . $new_name;
  move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
  return $new_name;
 }
}
function upload_image1()
{
  if(isset($_FILES["user_image1"]))
 {
  $extension1 = explode('.', $_FILES['user_image1']['name']);
  $new_name1 = rand() . '.' . $extension1[1];
  $destination1 = './image1/' . $new_name1;
  move_uploaded_file($_FILES['user_image1']['tmp_name'], $destination1);
  return $new_name1;
 }
}

function upload_image2()
{
  if(isset($_FILES["user_image2"]))
 {
  $extension2 = explode('.', $_FILES['user_image2']['name']);
  $new_name2 = rand() . '.' . $extension2[1];
  $destination2 = './image2/' . $new_name2;
  move_uploaded_file($_FILES['user_image2']['tmp_name'], $destination2);
  return $new_name2;
 }
}



function get_image_name($user_id)
{
 include('db1.php');
 $statement = $connection->prepare("SELECT image FROM rooms WHERE room_id = '$user_id'");
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["image"];
 }
}

function get_total_all_records()
{
 include('db1.php');
 $statement = $connection->prepare("SELECT * FROM rooms");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}



?>