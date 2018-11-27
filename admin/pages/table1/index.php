<?php 

  $db = mysqli_connect("localhost", "root", "", "mydb");
  $type_of_room = mysqli_query($db, "SELECT * FROM type_of_room");
  $getType = $_GET['type'];
     ?>
<html>
 <head>
  <title>Rooms</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:100%;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
   }
   .amenities_container
   {
    width: 30%;
    height: 80%;
    position: fixed;
    left: 35%;
    top: 10%;
    background-color: white;
    border-radius: 5px;
    padding: 1%;
    z-index: 4;
    display: none;
   }
   .house_rules
   {
    width: 40%;
    height: 80%;
    position: fixed;
    left: 33%;
    top: 10%;
    background-color: white;
    border-radius: 5px;
    padding: 1%;
    z-index: 4;
    display: none;
    overflow: auto;
   }
   .close_modal
   {
    width: 100%;
    height: 100%;
    position: fixed;
    left: 0;
    top: 0;
    background-color: rgba(0,0,0,0.7);
    z-index: 3;
    display: none;
   }
  </style>
 </head>
 <body>

  <div class="container box">

   <h1 align="center"><?php echo $getType; ?></h1>
   <input type="hidden" id="get_type" value="<?php echo $getType; ?>">
   <br />
   <div class="table-responsive">
    <br />
    <div align="right">
     <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
    </div>
    <br /><br />

    <div class="dropdown">
    Type of room: 
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><?php echo $getType; ?>
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <?php while ($row = mysqli_fetch_array($type_of_room)) { ?>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?type=<?php echo $row['type_name']; ?>"><?php echo $row['type_name']; ?></a></li>
      <?php } ?>
    </ul>
  </div>
  <br />
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th width="10%" style="font-size: 12px;">Image</th>
       <th width="35%" style="font-size: 12px;">Hotel Name</th>
       <th width="35%" style="font-size: 12px;">Business Type</th>
       <th width="5%" style="font-size: 12px;">House Rules</th>
       <th width="5%" style="font-size: 12px;">Amenities</th>
       <th width="5%" style="font-size: 12px;">Edit</th>
       <th width="5%" style="font-size: 12px;">Delete</th>
      </tr>
     </thead>
    </table>
    
   </div>
  </div>
 </body>
</html>
<div id="userModal" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="user_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Add Description</h4>
    </div>
    <div class="modal-body">
     <label id="label_name">Select Hotel</label>
     <input type="text" name="text_hotel" id="text_hotel" class="form-control" />
     <br />
     <label id="label_name">Enter Business Type</label>
     <input type="text" name="text_business" id="text_business" class="form-control" />
     <br />
     <label id="label_occupancy">Enter Address</label>
     <input type="text" name="text_address" id="text_address" class="form-control" />
     <br />
     <label id="label_rate">Enter Email</label>
     <input type="text" name="text_email" id="text_email" class="form-control" />
     <br />
     <label id="label_bed">Enter Contact Number</label>
     <input type="text" name="text_number" id="text_number" class="form-control" />
     <br />
     <label id="label_description">Enter Description</label>
     <textarea name="text_description" id="text_description" class="form-control" rows="5"></textarea>
     <br /> <br />
     <label id="label_image1">Select Room Image</label>
     <input type="file" name="user_image" id="user_image" />
     <br>
     <span id="user_uploaded_image"></span>
     <br /><br>
     <label id="label_image2">Select Room Image(1)</label>
     <input type="file" name="user_image1" id="user_image1" />
     <br>
     <span id="user_uploaded_image1"></span>
     <br /><br>
     <label id="label_image3">Select Room Image(2)</label>
     <input type="file" name="user_image2" id="user_image2" />
     <br>
     <span id="user_uploaded_image2"></span>
     <br /><br>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="room_id" id="room_id">
     <input type="text" name="user_id" id="user_id"  />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
     <!-- <input type="submit" id="add_dta" onclick="return chk()" class="btn btn-success" value="Add" /> -->
     <input type="hidden" name="text_status" id="text_status" value="Available"> 
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </form>
 </div>
</div>
<div class="close_modal" id="close_modal"></div>
<div id="amenities_container" class="amenities_container"></div>
<div id="house_rules" class="house_rules"></div>


<script type="text/javascript" language="javascript" src="js/functions.js"></script>

<script type="text/javascript">

$(document).on('click', '.amenities', function(){
  var user_id = $(this).attr("id");
   $.ajax({
    url:"amenities.php",
    method:"POST",
    data:{user_id:user_id},
    success:function(data)
    {
     $("#amenities_container").html(data);
     $("#amenities_container").fadeIn();
     $("#close_modal").fadeIn();
    }
   });
 });

$(document).on('click', '.house_r', function(){
  var user_id = $(this).attr("id");
   $.ajax({
    url:"house_rules.php",
    method:"POST",
    data:{user_id:user_id},
    success:function(data)
    {
     $("#house_rules").html(data);
     $("#house_rules").fadeIn();
     $("#close_modal").fadeIn();
    }
   });
 });

</script>