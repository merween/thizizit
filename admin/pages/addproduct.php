



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

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Vendor Activities & Package > Activities & Package Information</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="page-bar toolbarBox">
<div class="btn-toolbar">
<a href="#" class="toolbar_btn dropdown-toolbar navbar-toggle" data-toggle="collapse" data-target="#toolbar-nav"><i class="process-icon-dropdown"></i><div>Menu</div></a>
<ul id="toolbar-nav" class="nav nav-pills pull-right collapse navbar-collapse">
<li>
<a id="page-header-desc-htl_branch_info-new" class="toolbar_btn  pointer" href="addproduct2.php">
<i class="process-icon-new"></i>
<div>Add new rooms</div>
</a>
</li>
</ul>
</div>
</div>
                <!-- /.row -->
                <div class="row">
                    
<div class="panel-heading">
Manage Products <span class="badge">1</span>
<span class="panel-heading-action">
<a id="desc-htl_branch_info-new" class="list-toolbar-btn" href="index.php?controller=AdminAddHotel&amp;addhtl_branch_info&amp;token=d662ccd13037741bf48012517671b672">
<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true" data-placement="top">
<i class="process-icon-new"></i>
</span>
</a>
<a class="list-toolbar-btn" href="javascript:location.reload();">
<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Refresh list" data-html="true" data-placement="top">
<i class="process-icon-refresh"></i>
</span>
</a>
</span>
</div>

<style>
    @media (max-width: 992px) {
                    .table-responsive-row td:nth-of-type(1):before {
                content: "ID";
            }
                    .table-responsive-row td:nth-of-type(2):before {
                content: "Hotel Name";
            }
                    .table-responsive-row td:nth-of-type(3):before {
                content: "City";
            }
                    .table-responsive-row td:nth-of-type(4):before {
                content: "State";
            }
                    .table-responsive-row td:nth-of-type(5):before {
                content: "Country";
            }
                    .table-responsive-row td:nth-of-type(6):before {
                content: "Status";
            }
            }
    </style>



<?php





?>

<div class="table-responsive-row clearfix">
<table class="table htl_branch_info">

  <thead class="thead-dark">
    <tr>
      <th scope="col">Package id</th>
      <th scope="col">Company Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Beds</th>
      <th scope="col">Max. Adult</th>
      <th scope="col">Max. Child</th>
      <th scope="col">Images</th>
      <th scope="col">Swimming Pools</th>
      <th scope="col">Price rates</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
include("connect.php");


$view_query = mysqli_query($connect, "SELECT * FROM rooms");


while ($row = mysqli_fetch_assoc($view_query)){
$db_rid = $row["room_id"];
$db_hid = $row["hotel_id"];
$db_beds = $row["beds"];
$db_adult = $row["adult"];
$db_child = $row["child"];
$db_img = $row["room_img"];
$db_product = $row["room_name"];
$db_pools = $row["pools"];
$db_price = $row["price"];

$db_product_name = ucfirst($db_product);

$jscript = md5(rand(1,9));
$newscript = md5(rand(1,9));
$getUpdate = md5(rand(1,9));

echo "<tr>
    <td><center>$db_rid</td>
    <td><center>$db_hid</td>
    <td><center>$db_product_name</td>
    <td><center>$db_beds</td>
    <td><center>$db_adult</td>
    <td><center>$db_child</td>
    <td><img src='$db_img' style='width:64px;height:64px'></td>
    <td>$db_pools</td>
    <td><center>P$db_price</td>
    <td>
    <center>
    <a href='updateproduct.php?id=$db_rid' class= 'btn-update'>Edit</a>
    </center>
    </td>
    </tr>";


}
?>
 

  </tbody>
</table>




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
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
