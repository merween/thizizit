  <?php
include('db.php');
include('function.php');
$type = $_POST['type'];
$query = '';
$output = array();
$query .= "SELECT * FROM rooms WHERE type_of_room = '$type' ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'AND room_name LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY room_id DESC ';
}
if($_POST["length"] != -1)
{
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $image = '';
 if($row["image"] != '')
 {
  $image = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" />';
 }
 else
 {
  $image = '';
 }
$sub_array = array();
 $sub_array[] = $image;
 $sub_array[] = $row["room_name"];
 $sub_array[] = $row["type_of_room"];
 // $sub_array[] = '<button type="button" name="virtual" id="'.$row["room_id"].'" class="btn btn-danger btn-xs virtual">360 view</button>';
 $sub_array[] = '<button type="button" name="update" id="'.$row["room_id"].'"  class="btn btn-info btn-xs amenities">Amenities</button>';
 $sub_array[] = '<button type="button" name="update" id="'.$row["room_id"].'" class="btn btn-warning btn-xs update">Update</button>';
 $sub_array[] = '<button type="button" name="delete" id="'.$row["room_id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
 $data[] = $sub_array;
}
$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records(),
 "data"    => $data
);
echo json_encode($output);
?>
   