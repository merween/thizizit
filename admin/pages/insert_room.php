  <?php
include('db1.php');
include('function_room.php');
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $image = '';
  
  
  if($_FILES["user_image"]["name"] != '')
  {
   $image = upload_image();
  }
  $image1 = '';
  if($_FILES["user_image1"]["name"] != '')
  {
   $image1 = upload_image1();
  }
  $image2 = '';
  if($_FILES["user_image2"]["name"] != '')
  {
   $image2 = upload_image2();
  }

  $statement = $connection->prepare("
   INSERT INTO rooms (room_name, description, adult, child, price, type_of_room, beds, image, image1,  image2) 
   VALUES (:text_name, :text_description, :text_adult, :text_child, :text_price, :text_type,:text_bed,:image,  :image1, :image2)
  ");
  $result = $statement->execute(
   array(
    ':text_name' => $_POST["text_name"],
    ':text_description' => $_POST["text_description"],
    ':text_adult' => $_POST["text_adult"],
    ':text_child' => $_POST["text_child"],
    ':text_price' => $_POST["text_price"],
    ':text_type' => $_POST["text_type"],
    ':text_bed' => $_POST["text_bed"],
    ':image'  => $image1,
    ':image1'  => $image2,
    ':image2'  => $image3
   )
  );

  if(!empty($result))
  {
   echo 'Data Inserted';
  }
 }
 if($_POST["operation"] == "Edit")
 {
  $image = '';
  if($_FILES["user_image"]["name"] != '')
  {
   $image = upload_image();
  }
  else
  {
   $image = $_POST["hidden_user_image"];
  }

  $image1 = '';
  if($_FILES["user_image1"]["name"] != '')
  {
   $image1 = upload_image1();
  }
  else
  {
   $image1 = $_POST["hidden_user_image1"];
  }

  $image2 = '';
  if($_FILES["user_image2"]["name"] != '')
  {
   $image2 = upload_image2();
  }
  else
  {
   $image2 = $_POST["hidden_user_image2"];
  }

  $image3 = '';
  if($_FILES["user_image3"]["name"] != '')
  {
   $image3 = upload_image3();
  }
  else
  {
   $image3 = $_POST["hidden_user_image3"];
  }
  $statement = $connection->prepare(
   "UPDATE rooms 
   SET roomname = :text_name, occupancy = :text_occupancy, rate = :text_rate, type = :text_type, description = :text_description, area = :text_area, bed = :text_bed, capacity = :text_qty, status = :text_stat, image1 = :image, image2 = :image1, image3 = :image2, image4 = :image3  
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':text_name' => $_POST["text_name"],
    ':text_occupancy' => $_POST["text_occupancy"],
    ':text_rate' => $_POST["text_rate"],
    ':text_type' => $_POST["text_type"],
    ':text_description' => $_POST["text_description"],
    ':text_stat' => $_POST["text_stat"],
    ':text_area' => $_POST["text_area"],
    ':text_bed' => $_POST["text_bed"],
    ':text_qty' => $_POST["text_qty"],
    ':image1'  => $image1,
    ':image2'  => $image2,
    ':image3'  => $image3,
    ':image'  => $image,
    ':id'   => $_POST["user_id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }
}

?>