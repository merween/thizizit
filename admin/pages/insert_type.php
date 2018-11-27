  <?php
include('db1.php');
include('function.php');
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $statement = $connection->prepare("
   INSERT INTO type_of_room (type_name) 
   VALUES (:text_name)
  ");
  $result = $statement->execute(
   array(
    ':text_name' => $_POST["text_name"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted!';
  }
 }
 if($_POST["operation"] == "Edit")
 {
  $statement = $connection->prepare(
   "UPDATE type_of_room 
   SET type_name = :text_name 
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':text_name' => $_POST["text_name"],
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