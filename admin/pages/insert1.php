  <?php
include('db1.php');
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
  $statement = $connection->prepare("
   INSERT INTO activities (activity_name, image) 
   VALUES (:text_name, :image)
  ");
  $result = $statement->execute(
   array(
    ':text_name' => $_POST["text_name"],
    ':image'  => $image
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted!';
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
  $statement = $connection->prepare(
   "UPDATE activities 
   SET activity_name = :text_name, image = :image  
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':text_name' => $_POST["text_name"],
    ':image'  => $image,
    ':id'   => $_POST["user_id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated!';
  }
 }
}

?>