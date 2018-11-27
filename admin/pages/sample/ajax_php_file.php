<?php 

$target_dir = "image/";
$target_dir1 = "image1/";
$target_dir2 = "image2/";

$target_file = $target_dir . basename($_FILES["file"]["name"]);
$target_file1 = $target_dir1 . basename($_FILES["file1"]["name"]);
$target_file2 = $target_dir2 . basename($_FILES["file2"]["name"]);

$uploadOk = 1;
$uploadOk1 = 1;
$uploadOk2 = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    $check1 = getimagesize($_FILES["file1"]["tmp_name"]);
    $check2 = getimagesize($_FILES["file2"]["tmp_name"]);

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
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
elseif ($_FILES["file1"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk1 = 0;
}
elseif ($_FILES["file2"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk2 = 0;
}
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
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file2)) {
        echo "gago";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


 ?>