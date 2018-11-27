<?php include 'connect.php';

$amenities = mysqli_query($connect, "SELECT * FROM amenities");
$hotels = mysqli_query($connect, "SELECT * FROM hotel_registration");
$type = mysqli_query($connect, "SELECT * FROM type_of_room LIMIT 1");
$type_row = mysqli_fetch_array($type);

$getType = $type_row['type_name'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>iBukmo</title>
        <!-- sweetalert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link href="../css/startmin.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        
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
                                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"  class="active"><i class="fa fa-bar-chart-o fa-fw"></i>Hotel & Resort Management<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="hotelresort.php">Vendor Information</a>
                                    </li>
                                    <li>
                                        <a href="addproduct.php"  class="active">Vendor Activities & Package</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>

                            <li>
                                <a href="room_archives.php">&nbsp;<i class="fa fa-trash"></i> &nbsp;Room Archives</a>
                            </li>

                            <li>
                                <a href="#"><i class="glyphicon glyphicon-file"></i>File Maintenance<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="activities.php">Activities</a>
                                    </li>
                                    <li>
                                        <a href="amenities.php">Amenities</a>
                                    </li>
                                    <li>
                                        <a href="room_type.php">Type of Room</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                            </li>
                           
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="page-header">Vendor Activities & Package > Activities & Package Information</h5>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="page-bar toolbarBox">
<div class="btn-toolbar">
<a href="#" class="toolbar_btn dropdown-toolbar navbar-toggle" data-toggle="collapse" data-target="#toolbar-nav"><i class="process-icon-dropdown"></i><div>Menu</div></a>
<ul id="toolbar-nav" class="nav nav-pills pull-right collapse navbar-collapse">
<li>


</li>
<BR </ul>
</div>
</div>


<!-- lipat ko lang yung css -->
<link rel="stylesheet" type="text/css" href="media-style.css">
<iframe src="table/index.php?type=<?php echo $getType ?>" frameBorder="0"></iframe>

<style type="text/css">
iframe
{
    width: 76%;
    height: 100%;
    position: absolute;
    margin-bottom: 1%;
}
</style>
