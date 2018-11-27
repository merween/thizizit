  <?php
include('db1.php');
include('function.php');
if(isset($_POST["user_id"]))
{
  
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM amenities
  WHERE id = '".$_POST["user_id"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["text_name"] = $row["amenities_name"];
  if($row["image"] != '')
  {
   $output['user_image'] = '<br /><img src="amenities_image/'.$row["image"].'" class="img-thumbnail" width="150" height="155" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
  }
  else
  {
   $output['user_image'] = '<h5>No image available</h5>';
  }
 }
 echo json_encode($output);
}


?>
   