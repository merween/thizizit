<?php
$user_id = $_REQUEST["id"];

include("connect.php");

$get_record = mysqli_query($connect,"SELECT * FROM rooms WHERE room_id='$user_id'");

while($row_edit = mysqli_fetch_assoc($get_record)){

$db_productname=$row_edit["room_name"];
$db_hotelid = $row_edit["hotel_id"];
$db_description = $row_edit["description"];
$db_price = $row_edit["price"];
$db_amenities = $row_edit["roomamenities"];
$db_img = $row_edit["room_img"];

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
                            <li><a href="../../../index1.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <h1 class="page-header">Edit product</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    <div class="card">
                        <div class="card-header">Information
                                    </div>
                        <div class="card-body">
                            <form method="POST" action="updateproduct2.php">
                                   

<input type = "hidden" name="user_id" value=<?php echo $user_id ?>

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
                                        <input type="text"  id="full_name" class="form-control input-sm" name="productname" value ="<?php echo $db_productname; ?>" >
                                    </div>
                                </div>
 
                               
                           
                                <div class="form-group row">
                                    <label for="Description" class="col-md-6 col-form-label ">Description</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" id="comment" value="<?php echo $db_description; ?>" name="description" required></textarea>
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="address" class="col-md-6 col-form-label ">Price</label>
                                    <div class="col-md-12">
                                        <input type="text"  id="full_name" class="form-control input-sm" name="price" value ="<?php echo $db_price; ?>"
                                              >
                                    </div>
                                </div>
 
                                   
                                <div class="form-group row">
                                    <label for="phone" class="col-md-6 col-form-label ">Room Facilities(Amenities)</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" id="comment" name="roomamenities" value="<?php echo $db_amenities?>" ></textarea>
                                       
                                    </div>
                                </div>
 
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
 
 

