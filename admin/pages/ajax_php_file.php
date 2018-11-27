<?php 



if($_POST["operation"] == "Edit")
 {
  include 'db1.php';
  include 'function_room.php';

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
   "UPDATE rooms 
   SET room_name = :text_name, image = :image1
   WHERE room_id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':text_name' => $_POST["text_name"],
    ':image1'  => $image1,
    ':id'   => $_POST["user_id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }


include 'connect.php';
$rooms_rand = mysqli_query($connect, "SELECT * FROM rooms");
$room_row = mysqli_fetch_array($rooms_rand);
$room_id_rand = $room_row['hotel_id'];


$target_dir = "image/";
$target_dir1 = "image1/";
$target_dir2 = "image2/";

$target_file = $target_dir . basename($_FILES["user_image"]["name"]);
$target_file1 = $target_dir1 . basename($_FILES["user_image1"]["name"]);
$target_file2 = $target_dir2 . basename($_FILES["user_image2"]["name"]);

$hotel_id = $room_id_rand;
$hotel_name = $_POST['text_hotel'];
$room_name = $_POST['text_name'];
$adult = $_POST['text_adult'];
$child = $_POST['text_child'];
$bed = $_POST['text_bed'];
$price = $_POST['text_price'];
$description = $_POST['text_description'];
$image = $_FILES["user_image"]["name"];
$image1 = $_FILES["user_image1"]["name"];
$image2 = $_FILES["user_image2"]["name"];
$test=$_POST["amenities"];
$uploadOk = 1;
$uploadOk1 = 1;
$uploadOk2 = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["user_image"]["tmp_name"]);
    $check1 = getimagesize($_FILES["user_image1"]["tmp_name"]);
    $check2 = getimagesize($_FILES["user_image2"]["tmp_name"]);

    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        $uploadOk1 = 1;
        $uploadOk2 = 1;
    } 
    elseif($check1 !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        $uploadOk1 = 1;
        $uploadOk2 = 1;
    } 
    elseif($check2 !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        $uploadOk1 = 1;
        $uploadOk2 = 1;
    } 
    else {
        echo "File is not an image.";
        $uploadOk = 0;
        $uploadOk1 = 0;
        $uploadOk2 = 0;

    }
}

// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// elseif (file_exists($target_file1)) {
//     echo "Sorry, file already exists.";
//     $uploadOk1 = 0;
// }

// elseif (file_exists($target_file2)) {
//     echo "Sorry, file already exists.";
//     $uploadOk2 = 0;
// }
// // Check file size
// if ($_FILES["user_image"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// elseif ($_FILES["user_image1"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk1 = 0;
// }
// elseif ($_FILES["user_image2"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk2 = 0;
// }
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
elseif($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk1 = 0;
}
elseif($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
&& $imageFileType2 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk2 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["user_image1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["user_image2"]["tmp_name"], $target_file2)) {
        $insert_date = mysqli_query($connect, "INSERT INTO rooms (hotel_id, room_name, description, adult, child, beds, price, image, image1, image2) values ('$hotel_id', '$room_name', '$description', '$adult', '$child', '$bed', '$price', '$image', '$image1', '$image2')");

        

        foreach ($test as $test1)
        {
        $amenities_check = mysqli_query($connect, "INSERT INTO room_amenities (amenities) VALUES ('$test1')");
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
