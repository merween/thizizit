  <?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM hotel_registration
  WHERE hotel_id = '".$_POST["user_id"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["text_hotel"] = $row["hotel_name"];
  $output["text_business"] = $row["business_type"];
  $output["text_address"] = $row["address"];
  $output["text_email"] = $row["email_address"];
  $output["text_number"] = $row["phone_number"];
  $output["text_description"] = $row["short_description"];
  $output["user_id"] = $row["hotel_id"];
  if($row["image"] != '')
  {
   $output['user_image'] = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="150" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
  }
  else
  {
   $output['user_image'] = '<p>No Image Available</p>';
  }
  
  if($row["image1"] != '')
  {
   $output['user_image1'] = '<img src="upload1/'.$row["image1"].'" class="img-thumbnail" width="150" height="35" /><input type="hidden" name="hidden_user_image1" value="'.$row["image1"].'" />';
  }
  else
  {
   $output['user_image1'] = '<p>No Image Available</p>';
  }

  if($row["image2"] != '')
  {
   $output['user_image2'] = '<img src="upload2/'.$row["image2"].'" class="img-thumbnail" width="150" height="35" /><input type="hidden" name="hidden_user_image2" value="'.$row["image2"].'" />';
  }
  else
  {
   $output['user_image2'] = '<p>No Image Available</p>';
  }

  
 }
 echo json_encode($output);
}
?>
   