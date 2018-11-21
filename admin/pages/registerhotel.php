
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
 
 
$hotelname = $email = $address = $number = "";
 
$hotelnameErr = $emailErr = $addressErr = $numberErr = "";
 
$type = $msg = "";

$target_dir="Img/";
$uploaderr="";
 
if(isset($_POST['reghotel'])){
 
    $type = $_POST['business_type'];
    $hotelname = $_POST["hotelname"];
    $description = $_POST['sdescription'];
    $email = $_POST["emailad"];
    $address = $_POST["address"];
    $number = $_POST["pnumber"];
    $amenities = $_POST['hotelamenities'];




     $target_file = $target_dir . "/" . basename($_FILES["roomimg"]["name"]);
     $uploadok=1;

if($hotelname && $email && $address && $number){

  if(file_exists($target_file)){

        $target_file =$target_dir . rand(1,9) . rand(1,9) . rand(1,9) . rand(1,9) . "_" . basename($_FILES["roomimg"]["name"]);

        $uploadok=1;
    }

     $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if($_FILES["roomimg"]["size"] > 5000000000000000000000000){

        $uploaderr = "soory, your file is too large.";
        $uploadok=0;
    }


  if($uploadok == 1){
        if(move_uploaded_file($_FILES["roomimg"]["tmp_name"],$target_file)){
     
    
       
        $query = mysqli_query($connect, "INSERT INTO hotel_registration(business_type, hotel_name,short_description, address, email_address, phone_number ,hotel_facilities, hotel_img) VALUES ('$type','$hotelname','$description','$address','$email','$number','$amenities','$target_file')");
 
        echo "<script language='javascript'>alert('Registration Successfully!');</script>";
        header("location:registerhotel.php");       //pang redirect
 
    }else{
 
        echo "<script language='javascript'>alert('not Registration Successfully!')</script>";
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
 
        <title>My Admin Panel</title>
 
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
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Booking Management<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                           <a href="#">Booking Request</a>
                                    </li>
                                    <li>
                                        <a href="#">Booking History</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i>Content Management System</a>
                            </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Promos/Discount Management</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>User Management<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                           <a href="#">Add User</a>
                                    </li>
                                   
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                             <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i>Payment</a>
                            </li>
                             <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i>Reports</a>
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
                            <h1 class="page-header">Add New Vendor</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    <div class="card">
                        <div class="card-header">Information
                                    </div>
                        <div class="card-body">
                            <form method="POST">
                                   
                                <div class="form-group row">
                                    <label for="sel" class="col-md-6 col-form-label ">Type of Business</label>
                                    <div class="col-md-12">
                       
                                        <select class="form-control" id="sel1" name="business_type">
                                            <option name="business_type" value = "Hotel" <?php if ($type == "Hotel") { echo "selected"; } ?>>Hotel</option>
                                            <option name="business_type" value = "Resort" <?php if ($type == "Resort") { echo "selected"; } ?>>Resort</option>
                                            <option name="business_type" value = "Hotel & Resort" <?php if ($type == "Hotel & Resort") { echo "selected"; } ?>>Hotel & Resort</option> </select>
 
                                    </div>
                                </div>
                                   
                                <div class="form-group row">
                                    <label for="hotel_name" class="col-md-6 col-form-label ">Hotel/Resort Name</label>
                                    <div class="col-md-12">
                                        <input type="text"  id="full_name" class="form-control input-sm" name="hotelname" value ="<?php echo $msg; ?>" placeholder="hotel or resort name" required>
                                    </div>
                                </div>
 
                               
                           
                                <div class="form-group row">
                                    <label for="Description" class="col-md-6 col-form-label ">Short Description</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" id="comment" placeholder ="Type something..." name="sdescription" required></textarea>
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="address" class="col-md-6 col-form-label ">Address</label>
                                    <div class="col-md-12">
                                        <input type="text"  id="full_name" class="form-control input-sm" name="address" value ="<?php echo $address; ?>"
                                               placeholder="Address" required>
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="email" class="col-md-6 col-form-label ">Email Address</label>
                                    <div class="col-md-12">
                                        <input type="text"  id="email_ad" class="form-control input-sm" name="emailad" value ="<?php echo $email; ?>"
                                               placeholder="example@gmail.com" required>                                        
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="phone" class="col-md-6 col-form-label ">Phone Number</label>
                                    <div class="col-md-12">
                                        <input type="text"  id="phone" class="form-control input-sm" name="pnumber" value ="<?php echo $number; ?>"
                                               placeholder="0917xxxxxxx" maxlenght = "11" onkeypress ='return isNumberKey(event)' required>
                                    </div>
                                </div>
                                   
                                <div class="form-group row">
                                    <label for="phone" class="col-md-6 col-form-label ">Hotel Facilities(Amenities)</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" id="comment" name="hotelamenities" placeholder ="Type something..." ></textarea>
                                       
                                    </div>
                                </div>

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


                            </form>
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