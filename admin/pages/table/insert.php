  <?php
include('db.php');
include('function.php');
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
   INSERT INTO rooms (hotel_id, room_name, description, adult, child, beds, price, image, image1, image2, type_of_room) 
   VALUES (:text_hotel, :text_name, :text_description, :text_adult, :text_child, :text_bed, :text_price,:image,:image1, :image2, :text_type)
  ");
  $result = $statement->execute(
   array(
    ':text_name' => $_POST["text_name"],
    ':text_hotel' => $_POST["text_hotel"],
    ':text_description' => $_POST["text_description"],
    ':text_adult' => $_POST["text_adult"],
    ':text_child' => $_POST["text_child"],
    ':text_bed' => $_POST["text_bed"],
    ':text_price' => $_POST["text_price"],
    ':text_type' => $_POST["text_type"],
    ':image'  => $image,
    ':image1'  => $image1,
    ':image2'  => $image2
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

  $statement = $connection->prepare(
   "UPDATE rooms 
   SET room_name = :text_name, description = :text_description, adult = :text_adult, child = :text_child, beds = :text_bed, price = :text_price, type_of_room = :text_type, image = :image, image1 = :image1, image2 = :image2 
   WHERE room_id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':text_name' => $_POST["text_name"],
    ':text_description' => $_POST["text_description"],
    ':text_adult' => $_POST["text_adult"],
    ':text_child' => $_POST["text_child"],
    ':text_bed' => $_POST["text_bed"],
    ':text_price' => $_POST["text_price"],
    ':text_type' => $_POST["text_type"],
    ':image'  => $image,
    ':image1'  => $image1,
    ':image2'  => $image2,
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