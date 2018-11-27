  <?php
include('db1.php');
include('function.php');
if(isset($_POST["user_id"]))
{
  
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM rooms
  WHERE room_id = '".$_POST["user_id"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $output["text_name"] = $row["room_name"];
  $output["text_adult"] = $row["adult"];
  $output["text_child"] = $row["child"];
  $output["text_bed"] = $row["beds"];
  $output["text_description"] = $row["description"];
  $output["text_price"] = $row["price"];
  $output['user_id'] = $row['room_id'];
  if($row["image"] != '')
  {
   $output['file'] = '<br /><img src="image/'.$row["image"].'" class="img-thumbnail" width="350" height="355" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
  }
  else
  {
   $output['file'] = '<h5>No image available</h5>';
  }
 }
 echo json_encode($output);
}


?>
   