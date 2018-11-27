<?php 

include '../connect.php';

$user_id = $_POST['user_id'];


$getData = mysqli_query($connect, "SELECT * FROM houserules where id ='$user_id'");
$row = mysqli_fetch_array($getData);
$getId = $row['hotel_id'];

$insert = mysqli_query($connect, "DELETE FROM houserules where id = '$user_id'");
$f_rule = mysqli_query($connect, "SELECT * FROM houserules where hotel_id = '$getId'");


 ?>
 <ol>
 <?php while($row = mysqli_fetch_array($f_rule)) { ?>
 <li style="padding: 1%;"><?php echo $row['rule']; ?> <button type="button" id="<?php echo $row['id']; ?>"class="btn btn-danger btn-xs delete_rules"><span class="glyphicon glyphicon-trash"> </span></button></li>
 <?php } ?>
 </ol>