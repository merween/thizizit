<?php 

include '../connect.php';

$rule = $_POST['rule'];
$user_id = $_POST['user_id'];


$insert = mysqli_query($connect, "INSERT INTO houserules (rule, hotel_id) values ('$rule', '$user_id')");
$f_rule = mysqli_query($connect, "SELECT * FROM houserules where hotel_id = '$user_id'");


 ?>
 <ol>
 <?php while($row = mysqli_fetch_array($f_rule)) { ?>
 <li style="padding: 1%;"><?php echo $row['rule']; ?> <button type="button" id="<?php echo $row['id']; ?>"class="btn btn-danger btn-xs delete_rules"><span class="glyphicon glyphicon-trash"> </span></button></li>
 <?php } ?>
 </ol>