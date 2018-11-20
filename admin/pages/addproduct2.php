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
 
include("connect.php");
 
 
$hotelid =  $price = $productname = "";
 
$hoteliderr =  $priceerr = $productnameerr = "";
 
$target_dir="Img/";
$uploaderr="";
 
 
if(isset($_POST['reghotel'])){
 
    $hotelid = $_POST['hotelid'];
    $productname = $_POST["productname"];
    $description = $_POST['description'];
    $maxadult = $_POST['adult'];
    $maxchild = $_POST['child'];
    $beds = $_POST['beds'];
 $pool_string = implode(', ', $_POST['swimpool']);
  
    $price = $_POST["price"];
    
    $amenities = $_POST['roomamenities'];

     $target_file = $target_dir . "/" . basename($_FILES["roomimg"]["name"]);
     $uploadok=1;
     
    if($productname && $price){
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


    $query = mysqli_query($connect, "INSERT INTO rooms(hotel_id, room_name, description,adult,child, price, roomamenities,beds, pools, room_img) VALUES ('$hotelid','$productname','$description','$maxadult','$maxchild','$price','$amenities','$beds','$pool_string','$target_file')") or die (mysqli_error());
 
        echo "<script language='javascript'>alert('Registration Successfully!');</script>";
        header("location:addproduct.php");       //pang redirect
    }else{
        echo "sorry, there was an error upload your file.";
    }
}
}

if(empty($_GET["notify"])){

}
else{
    echo"<center" . $_GET["notify"] . "</center>";
}

       
      
 
           
}
       
 
?>












<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
 
        <title>Startmin - Bootstrap Admin Theme</title>
 
        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
 
        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">
 
        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">
 
        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">
 
        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">
 
        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
 
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">iBukmo</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> My Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New orders
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                           
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.html" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Hotel & Resort Management<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                           <a href="hotelresort.php">Vendor Information</a>
                                    </li>
                                    <li>
                                        <a href="addproduct.php">Vendor Activities & Package</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                            </li>
                           
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
                <!-- /.navbar-static-side -->
         
 
 
 
 
 
       <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Add new product</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    <div class="card">
                        <div class="card-header">Information
                                    </div>
                        <div class="card-body">
                            <form method="POST" enctype ="multipart/form-data">
                                   
                                <div class="form-group row">
                                    <label for="sel" class="col-md-6 col-form-label ">Select Company</label>
                                    <div class="col-md-12">
                       
                                        <select class="form-control" id="sel1" name="hotelid">
                                           

                                              <?php
                                              include("connect.php");

                                            $sql = mysqli_query($connect, "SELECT hotel_id, hotel_name  From hotel_registration");
                                          
                                            while ($row = mysqli_fetch_assoc($sql)){
                                                $db_id = $row["hotel_id"];
                                                $db_name = $row["hotel_name"];


                                            echo "<option value = $db_id>$db_name</option>";
                                                }
                                                                ?>

 

                                        </select>
 
                                    </div>
                                </div>
                                   
                                <div class="form-group row">
                                    <label for="hotel_name" class="col-md-6 col-form-label ">Product Name</label>
                                    <div class="col-md-12">
                                        <input type="text"  id="full_name" class="form-control input-sm" name="productname" value ="<?php echo $productname; ?>" placeholder="Room name" required>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label for="bed" class="col-md-6 col-form-label ">Beds</label>
                                    <div class="col-md-12">
                                        <input type="number"  id="bed" class="form-control input-sm" min="1" max="5" name="beds" value ="<?php echo $beds; ?>" placeholder="No. beds" required>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label for="adult" class="col-md-6 col-form-label ">Max. Adults</label>
                                    <div class="col-md-12">
                                        <input type="number"  id="adult" class="form-control input-sm" min="1" max="30" name="adult" value ="<?php echo $adult; ?>" placeholder="No. adults" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="child" class="col-md-6 col-form-label ">Max. Child</label>
                                    <div class="col-md-12">
                                        <input type="number"  id="bed" class="form-control input-sm" min="1" max="30" name="child" value ="<?php echo $child; ?>" placeholder="No. child" required>
                                    </div>
                                </div>
 
                               
                           
                                <div class="form-group row">
                                    <label for="Description" class="col-md-6 col-form-label ">Description</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" id="comment" placeholder ="Type something..." name="description" required></textarea>
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="address" class="col-md-6 col-form-label ">Price</label>
                                    <div class="col-md-12">
                                        <input type="text"  id="full_name" class="form-control input-sm" name="price" value ="<?php echo $price; ?>"
                                               placeholder="Price" required>
                                    </div>
                                </div>
 
                                   
                                <div class="form-group row">
                                    <label for="phone" class="col-md-6 col-form-label ">Room Facilities(Amenities)</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" id="comment" name="roomamenities" placeholder ="Type something..." ></textarea>
                                       
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label for="swim" class="col-md-6 col-form-label ">Swimming Pools Category</label>
                                    <div class="col-md-12">
                       
                                        <select class="form-control" id="swim" value ="<?php echo $pools; ?>" name="swimpool[]" multiple>
                                           

                                             <option value="Adult pool">Adult pool</option>
                                             <option value="Olympic-Size swimming pool">Olympic-Size swimming pool</option>
                                             <option value="Jacuzzi">Jacuzzi</option>
                                             <option value="Infinity pool">Infinity pool</option>
                                             <option value="Wave pool">Wave pool</option>
                                             <option value="Kiddie Pool">Kiddie pool</option>


                                        </select>

 
                                    </div>
                                </div>

                                

                                <br>
                                <br>

                                 <table border ="0" width = "30%">
                                        <tr>
                                            <td colspan ="2"><center><span id="preview"><center></span></td></tr>
<tr><td colspan ="2"><hr></td></tr>
<tr>
    <td width ="50%"><input type = "file" name="roomimg" id="roomimg" onchange="displayPreview(this.files);"/></td>
    <td></td>
</tr>

</table>
<span class ="error"> <?php echo $uploaderr; ?> </span>
<br>
<br>



 
                                <div class="col-md-6 offset-md-4">
                                    <input type="submit" name="reghotel" value="Register" class="btn btn-primary">
                                </div>
                           
                                <br>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
 
        </div>
       
        <script type="text/javascript">
   
 
            function isNumberKey(evt){
 
                var charCode = (evt.which) ? evt.which : event.keyCode
 
                if(charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
            }
        </script>
        <!-- /#wrapper -->
 
        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>
 
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
 
        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>
 
        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>
 
        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
 
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
       
 
    </body>
</html>