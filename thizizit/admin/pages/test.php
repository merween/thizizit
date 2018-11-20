
 <!DOCTYPE html>
 <html>
 <head>
     <title>wew</title>
 </head>
 <body>
 


 <script src="../js/jQuery.js"></script>
 <style>
 img{height:150px;}
</style>



<script type ="application/javascript">

var _URL= window.URL || window.webkitURL;
function displayPreview(files){

    var file = files[0]
    var img = new Image();
    var sizeKB = file.size / 1024;
    img.onload = function(){

        $('#preview').append(img);
    }

    img.src=_URL.createObjectURL(file);
}


    </script>

<?php

$target_dir="Img/";
$uploaderr="";
if(isset ($_POST["btnupload"])){

    $target_file = $target_dir . "/" . basename($_FILES["roomimg"]["name"]);

    $uploadok=1;
    if(file_exists($target_file)){

        $target_file =$target_dir . rand(1,9) . rand(1,9) . rand(1,9) . rand(1,9) . "_" . basename($_FILES["roomimg"]["name"]);

        $uploadok=1;
    }

    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if($_FILES["roomimg"]["size"] > 5000000000000000000000000){

        $uploaderr = "soory, your file is too large.";
        $uploadok=0;
    }


    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){

        $uploaderr ="sorry, only JPG, JPEG, PNG & GIF files are allowed.";

        $uploadok=0;
    }

    if($uploadok == 1){
        if(move_uploaded_file($_FILES["roomimg"]["tmp_name"],$target_file)){
    echo "<font color =green>the file ". basename($_FILES["roomimg"]["name"]). " has been uplaoded.</font>";
    }else{
        echo "sorry, there was an error upload your file.";
    }
}
}

?>
<br>
<br>
<br>
<br>
<br>

                                <br>
                                <form method ="POST" enctype ="multipart/form-data">
                                    <table border ="0" width = "30%">
                                        <tr>
                                            <td colspan ="2"><center><span id="preview"><center></span></td></tr>
<tr><td colspan ="2"><hr></td></tr>
<tr>
    <td width ="50%"><input type = "file" name="roomimg" id="roomimg" onchange="displayPreview(this.files);"/></td>
    <td></td>
</tr>
<tr>
    <td colspan ="2">
        <center>
            <input type ="submit" name="btnupload" class ="btn-update" value="Upload">
        </td>
    </tr>
</table>
</form>

<span class ="error"> <?php echo $uploaderr; ?> </span>


 </body>
 </html>