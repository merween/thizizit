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
   INSERT INTO hotel_registration (business_type, hotel_name, short_description, address, email_address, phone_number, image, image1, image2) 
   VALUES (:text_business, :text_hotel, :text_description, :text_address, :text_email, :text_number,:image,:image1, :image2)
  ");
  $result = $statement->execute(
   array(
    ':text_business' => $_POST["text_business"],
    ':text_hotel' => $_POST["text_hotel"],
    ':text_description' => $_POST["text_description"],
    ':text_address' => $_POST["text_address"],
    ':text_email' => $_POST["text_email"],
    ':text_number' => $_POST["text_number"],
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


  $statement = $connection->prepare(
   "UPDATE hotel_registration 
   SET hotel_name = :text_hotel, business_type = :text_business , short_description = :text_description, address = :text_address, email_address = :text_email, phone_number = :text_number, image = :image, image1 = :image1, image2 = :image2
   WHERE hotel_id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':text_business' => $_POST["text_business"],
    ':text_hotel' => $_POST["text_hotel"],
    ':text_description' => $_POST["text_description"],
    ':text_address' => $_POST["text_address"],
    ':text_email' => $_POST["text_email"],
    ':text_number' => $_POST["text_number"],
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