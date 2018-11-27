  <?php
include('db1.php');
include('function.php');
if(isset($_POST["user_id"]))
{
  
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM type_of_room
  WHERE id = '".$_POST["user_id"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["text_name"] = $row["type_name"];
 }
 echo json_encode($output);
}


?>
   