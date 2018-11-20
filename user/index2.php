    <?php

session_start();

if(isset($_SESSION["id"])){
  
  $user_id = $_SESSION["id"];

  include("../connections.php");

  $get_record = mysqli_query($connections, "SELECT * FROM registration WHERE id ='$user_id'");

  while ($row_edit = mysqli_fetch_assoc($get_record)){
  $db_name = $row_edit["fullname"];
  $db_username = $row_edit["username"];
  $db_email = $row_edit["emailad"];

}
echo "welcome $db_username !";

}else{
  
  echo "You mustl login first! <a href='../login.php'>log in now!</a>";
}