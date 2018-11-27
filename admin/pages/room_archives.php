



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>iBukmo</title>


        <!-- scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- sweetalert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                                <a href="index.<?php  ?>"  class="active">&nbsp;<i class="fa fa-trash"></i> &nbsp;Room Archives</a>
                            </li>

                            <li>
                                <a href="#"> &nbsp;<i class="glyphicon glyphicon-file"> </i> File Maintenance<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="activities.php" class="active">Activities</a>
                                    </li>
                                    <li>
                                        <a href="amenities.php" >Amenities</a>
                                    </li>
                                    <li>
                                        <a href="room_type.php" >Type of Room</a>
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
                        <h5 class="page-header">Room Archives</h5>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>


                <div class="page-bar toolbarBox">
<div class="btn-toolbar">
<a href="#" class="toolbar_btn dropdown-toolbar navbar-toggle" data-toggle="collapse" data-target="#toolbar-nav"><i class="process-icon-dropdown"></i><div>Menu</div></a>
<ul id="toolbar-nav" class="nav nav-pills pull-right collapse navbar-collapse">
<li>
<!-- <button type='button' class='btn btn-info btn-sm' id="add_room">Add Room</button> -->
</li>
</ul>
</div>
</div>

<!-- /.row -->
<div class="row">
<div class="panel-heading">
<!-- Manage Products <span class="badge">1</span> -->
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

<!-- lipat ko lang yung css -->
<link rel="stylesheet" type="text/css" href="media-style.css">



<?php





?>

<div class="table-responsive-row clearfix" id="room_table">
<table class="table htl_branch_info">

  <thead class="thead-dark">
    <tr>
      <!-- <th scope="col">Package id</th>
      <th scope="col">Company Id</th> -->
      <th scope="col">Images</th>
      <th scope="col">Product Name</th>
      <th scope="col">Beds</th>
      <th scope="col">Max. Adult</th>
      <th scope="col">Max. Child</th>
      <th scope="col">Price rates</th>
      <th scope="col-3">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
include("connect.php");


$view_query = mysqli_query($connect, "SELECT * FROM room_archives");


while ($row = mysqli_fetch_assoc($view_query)){
$db_rid = $row["room_id"];
$db_hid = $row["hotel_id"];
$db_beds = $row["beds"];
$db_adult = $row["adult"];
$db_child = $row["child"];
$db_img = $row["image"];
$db_product = $row["room_name"];
$db_pools = $row["pools"];
$db_price = $row["price"];

$db_product_name = ucfirst($db_product);

$jscript = md5(rand(1,9));
$newscript = md5(rand(1,9));
$getUpdate = md5(rand(1,9));

echo "<tr>
    
    <td><img src='table/upload/".$db_img."' style='width:64px;height:64px'></td>
    <td>$db_product_name</td>
    <td>$db_beds</td>
    <td>$db_adult</td>
    <td>$db_child</td>
    <td>₱ ".number_format($db_price, 2) . "</td>
    <td>
    <button type='button' class='btn btn-info btn-xs delete' id='".$db_rid."'>Restore</button>
    <button type='button' class='btn btn-danger btn-xs del' id='".$db_rid."'>Delete</button>
    
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


<script type="text/javascript">


$(document).ready(function(){

    $("#add_room").click(function(){
    alert("The paragraph was clicked.");
    });

});

$(document).on('click', '.delete', function(){
  var user_id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this?"))
  {
   $.ajax({
    url:"restore.php",
    method:"POST",
    data:{user_id:user_id},
    success:function(data)
    {
     $("#room_table").load(" #room_table");
     swal("Successfully!", data, "success");
    }
   });
  }
  else
  {
   return false; 
  }
 });

$(document).on('click', '.del', function(){
  var user_id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this?"))
  {
   $.ajax({
    url:"permanent.php",
    method:"POST",
    data:{user_id:user_id},
    success:function(data)
    {
     $("#room_table").load(" #room_table");
     swal("Successfully!", data, "success");
    }
   });
  }
  else
  {
   return false; 
  }
 });
</script>