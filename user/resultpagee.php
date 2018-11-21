
    <?php

session_start();

if(isset($_SESSION["id"])){
  
  $user_id = $_SESSION["id"];

  include("../connections.php");

  $get_record = mysqli_query($connections, "SELECT * FROM registration WHERE id ='$user_id'");

  while ($row_edit = mysqli_fetch_assoc($get_record)){
  $db_name = $row_edit["fullname"];
  $db_username = $row_edit["username"];
  $db_email = $row_edit["emailad"];

}


}else{
  
 



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBukmo</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/half-slider-1.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body><!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">LakbayHub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span></span> 
        </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            
            <li class="nav-item">
              <a class="nav-link" href="#">Home
                <span class="sr-only"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo "You mustl login first! <a href='../login.php'>log in now!</a>";}?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            li class="nav-item">
              <a class="nav-link" href="login.php"><?php echo "welcome $db_username !"; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    



    <!-- Page Content -->

<div class="columns-container">
  <div id="columns" class="container">
    <div id="slider_row" class="row">
      <div id="top_column" class="center_column col-xs-12 col-sm-12">
      </div>
    </div>
    <div class="row">
      <div id="left_column" class="column col-xs-12 col-sm-3">
        <div class="row margin-lr-0 block" id="filter_search_block">
          <div class="filter_header">
            <div class="col-sm-12">
              <p>Search Rooms</p>
              <hr class="theme-text-underline">
            </div>
          </div>

           <!-- forms -->


          <div class="col-sm-12 category_page_search_block clear-both">
            <form method="POST" autocomplete="on" autofill="on">
              <div class="form-group hotel_location_div">
               <label class="control-label" for="">Hotel/Resort/Locations Search</label> 
               <input class="form-control" placeholder="Enter a location or name of hotel or resort" type="text" id="hotel_location" name="hotel_location" autocomplete="off" value="<?php echo $_POST['search']?>" city_cat_id="14">
               <div class="dropdown">
                <ul class="location_search_results_ul" style="display: none;">
                </ul>
              </div>
            </div>
            <div class="form-group htl_nm_cont "> 
              <label class="control-label" for="">Hotel Name</label>
              <div class="dropdown">
               <button class="btn btn-default hotel_cat_id_btn dropdown-toggle" type="button" data-toggle="dropdown">
                <span id="hotel_cat_name" class="pull-left">#</span> 
                <input type="hidden" id="hotel_cat_id" name="hotel_cat_id" value="15"> 
                <input type="hidden" id="id_hotel" name="id_hotel" value="1">
                 <input type="hidden" id="max_order_date" name="max_order_date" value="2019-09-18">
                  <span class="arrow_span"> 
                    <i class="icon icon-angle-down"></i> </span>
                     </button>
                     <ul class="dropdown-menu hotel_dropdown_ul">
                      <li class="hotel_name" data-id-hotel="1" data-hotel-cat-id="15" data-max_order_date="2019-09-18"> #</li>
                    </ul>
                  </div>
                  <p class="error_msg" id="select_htl_error_p"></p></div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12"> 
                        <label class="control-label" for="check_in_time">Check In Time</label>
                        <div class="input-group"> 
                          <input class="form-control hasDatepicker" type="text" id="check_in_time" name="check_in_time" value="08-11-2018"> 
                          <label class="input-group-addon" for="check_in_time">
                            <i class="icon-calendar">
                            </i></label></div>
                            <p class="error_msg" id="check_in_time_error_p"></p></div>
                            <div class="col-xs-12 col-sm-12 margin-top-10"> 
                              <label class="control-label" for="check_out_time">Check Out Time</label>
                              <div class="input-group"> 
                                <input class="form-control hasDatepicker" type="text" id="check_out_time" name="check_out_time" value="15-11-2018"> 
                                <label class="input-group-addon" for="check_out_time">
                                  <i class="icon-calendar"></i></label></div>
                                  <p class="error_msg" id="check_out_time_error_p"></p></div></div></div><div>
                                   <button type="submit" name="filter_search_btn" class="btn btn-default button button-medium exclusive" id="filter_search_btn"> 
                                    <span>Search</span> </button></div>
                                  </form>
                                </div></div>



                                 <!-- filter -->



      <div id="filter_results" class="row block">
                                  <div class="col-sm-12">
                                    <div class="row margin-lr-0 layered_filter_cont">
                                      <div class="col-sm-12 layered_filter_heading">
                                        <div class="row margin-lr-0">
                                          <div class="pull-left lf_headingmain_wrapper">
                                           <span>Guest Rating</span>
                                           <hr class="theme-text-underline"></div> 
                                           <span class="pull-right clear_filter">Clear Filter</span></div></div>
                                           <div class="col-sm-12 lf_sub_cont">
                                            <div class="layered_filt"> 
                                              <div class="checker">
                                                <span><input type="checkbox" class="filter" data-type="ratting" value="5"></span></div> 
                                                <label style="background-image:url(/modules/wkhotelfilterblock/views/img/stars-sprite-image.png);" class="ratting_img_style ratting_5"> </label></div><div class="layered_filt"> <div class="checker"><span>
                                                  <input type="checkbox" class="filter" data-type="ratting" value="4"></span></div> 
                                                  <label style="background-image:url(/modules/wkhotelfilterblock/views/img/stars-sprite-image.png);" class="ratting_img_style ratting_4">
                                                   </label></div>
                                                   <div class="layered_filt"> 
                                                    <div class="checker"><span>
                                                      <input type="checkbox" class="filter" data-type="ratting" value="3"></span></div> 
                                                      <label style="background-image:url(/modules/wkhotelfilterblock/views/img/stars-sprite-image.png);" class="ratting_img_style ratting_3"> 
                                                      </label></div>
                                                      <div class="layered_filt"> <div class="checker">
                      <span>
                      <input type="checkbox" class="filter" data-type="ratting" value="2"></span></div> 
                      <label style="background-image:url(/modules/wkhotelfilterblock/views/img/stars-sprite-image.png);" class="ratting_img_style ratting_2"> </label></div>
                      <div class="layered_filt"> 
                        <div class="checker"><span>
                          <input type="checkbox" class="filter" data-type="ratting" value="1"></span></div> 
                          <label style="background-image:url(/modules/wkhotelfilterblock/views/img/stars-sprite-image.png);" class="ratting_img_style ratting_1"> </label></div>
                          <div class="layered_filt"> <div class="checker"><span><input type="checkbox" class="filter" data-type="ratting" value="0"></span></div> 
                          <label style="background-image:url(/modules/wkhotelfilterblock/views/img/stars-sprite-image.png);" class="ratting_img_style ratting_0"> </label></div></div></div>
                          <div class="row margin-lr-0 layered_filter_cont">
                            <div class="col-sm-12 layered_filter_heading">
                              <div class="row margin-lr-0">


                                 <!-- Ameneties -->


                         <div class="pull-left lf_headingmain_wrapper"> <span>Amenities</span><hr class="theme-text-underline"></div> 
                         <span class="pull-right clear_filter">Clear Filter</span></div></div>
                         <div class="col-sm-12 lf_sub_cont">
                                  <div class="layered_filt"> 
                                    <div class="checker"><span>
                                      <input type="checkbox" class="filter" data-type="amenities" value="8"></span></div> <span class="filters_name">Wi-Fi</span></div><div class="layered_filt"> <div class="checker"><span>
                                        <input type="checkbox" class="filter" data-type="amenities" value="9"></span></div> <span class="filters_name">News Paper</span></div>
                                        <div class="layered_filt"> <div class="checker">
                                          <span>
                                          <input type="checkbox" class="filter" data-type="amenities" value="10"></span></div> 
                                          <span class="filters_name">Power BackUp</span></div><div class="layered_filt"> <div class="checker"><span>
                                            <input type="checkbox" class="filter" data-type="amenities" value="11"></span></div> 
                                            <span class="filters_name">Refrigerator</span></div>
                                            <div class="layered_filt"> 
                                              <div class="checker">
                                                <span><input type="checkbox" class="filter" data-type="amenities" value="12"></span></div> 
                                                <span class="filters_name">Restaurant</span></div>
                                                <div class="layered_filt"> 
                                                  <div class="checker"><span>
                                                    <input type="checkbox" class="filter" data-type="amenities" value="13"></span></div> 
                                                    <span class="filters_name">Room Service</span></div>
                                                    <div class="layered_filt"> <div class="checker">
                                                      <span><input type="checkbox" class="filter" data-type="amenities" value="14"></span></div> 
                                                      <span class="filters_name">Gym</span></div></div></div>
                                                      <div class="row margin-lr-0 layered_filter_cont">
      <div class="col-sm-12 layered_filter_heading">
        <div class="row margin-lr-0">
          <div class="pull-left lf_headingmain_wrapper"> 
            <span>Price</span>
            <hr class="theme-text-underline"></div> <span class="pull-right clear_filter">Clear Filter</span></div></div>
            <div class="col-sm-12 lf_sub_cont">
              <div class="row margin-lr-0 price_filter_subcont"> 
                <span class="pull-left">$1,000.00</span> 
                <span class="pull-right">$2,500.00</span></div>
                <div id="filter_price_silder" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                  <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                  <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
                  <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a></div></div></div></div></div></div>
                    

                     <!-- MAINNNNN -->



                    <div id="center_column" class="center_column col-xs-12 col-sm-9">
                    <div class="row cat_cont">
    <div class="col-sm-12">
      <div class="row margin-lr-0 catSortBlock">
        <div class="col-sm-2 sortBlockHeading">
          <p>Sort By:</p></div>
          <div class="col-sm-3">
            <div class="filter_dw_cont"> 
              <button class="btn btn-default dropdown-toggle" type="button" id="gst_rating" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                <span class="pull-left sort_btn_span" data-sort-by="0" data-sort-value="0" data-sort-for="Rating">Rating</span> 
                <span class="caret pull-right margin-top-7"></span> </button>
                <ul class="dropdown-menu" aria-labelledby="gst_rating">
                  <li><a href="#" class="sort_result" data-sort-by="1" data-value="1">Rating Ascending</a></li>
                  <li><a href="#" class="sort_result" data-sort-by="1" data-value="2">Rating Descending</a></li></ul></div></div>
                  <div class="col-sm-3"><div class="filter_dw_cont"> 
                    <button class="btn btn-default dropdown-toggle" type="button" id="price_ftr" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                      <span class="pull-left sort_btn_span" data-sort-by="0" data-sort-value="0" data-sort-for="Price">Price</span> <span class="caret pull-right margin-top-7"></span> </button>
                      <ul class="dropdown-menu" aria-labelledby="price_ftr">
                        <li><a href="#" class="sort_result" data-sort-by="2" data-value="1">Price : Lowest First</a></li>
                        <li><a href="#" class="sort_result" data-sort-by="2" data-value="2">Price : Highest first </a></li></ul></div></div></div>
                        <div class="row margin-lr-0" id="category_data_cont"> 
                          <input type="hidden" id="max_order_date" name="max_order_date" value="2019-09-18">
                         

                               <!-- Page Content -->


<?php 
include("../connections.php");
 
if(isset($_POST['search'])){
  $search = $_POST['search'];

  $searchQuery = mysqli_query($connections, "SELECT hr.*, r.room_id, r.room_name, r.description, r.adult, r.child, r.price, r.beds, r.pools, r.room_img
  FROM hotel_registration as hr left join rooms as r on hr.hotel_id = r.hotel_id where hr.hotel_name like '%".$search."%' or hr.address like '%".$search."%' or hr.business_type like '%".$search."%' or r.room_name like '%".$search."%'");

  $resultSet = array();

  while ($row = mysqli_fetch_assoc($searchQuery)){
    //echo "<pre>";
  //var_dump($row);
  //echo "</pre>";
    
      $resultSet[$row["hotel_id"]]["hotel_id"] = $row["hotel_id"];
      $resultSet[$row["hotel_id"]]["hotel_name"] = $row["hotel_name"];
      $resultSet[$row["hotel_id"]]["business_type"] = $row["business_type"];
      $resultSet[$row["hotel_id"]]["short_description"] = $row["short_description"];
      $resultSet[$row["hotel_id"]]["address"] = $row["address"];
      $resultSet[$row["hotel_id"]]["email_address"] = $row["email_address"];
      $resultSet[$row["hotel_id"]]["phone_number"] = $row["phone_number"];
      $resultSet[$row["hotel_id"]]["hotel_facilities"] = $row["hotel_facilities"];

      // adding rooms in hotel
    
    if($row["room_id"] != null ) {      
      $resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["room_id"] = $row["room_id"];
      $resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["room_name"] = $row["room_name"];
      $resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["description"] = $row["description"];
      $resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["adult"] = $row["adult"];
      $resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["child"] = $row["child"];
      $resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["price"] = $row["price"];
      $resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["beds"] = $row["beds"];
      $resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["pools"] = $row["pools"];
      $resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["room_img"] = $row["room_img"];
    }
 
  }
 
}





foreach($resultSet as $key => $value ):
 
?>





  <div class="col-sm-12 room_cont">
                            <div class="row">
                              <div class="col-sm-4"> 



      <a href="#"> <img src="https://demo.qloapps.com/24-home_default/super-delux-rooms.jpg" class="img-responsive"> </a></div>
   
      <div class="col-sm-8">
        <p class="rm_heading"><?php echo $value["hotel_name"] ?></p>
         <span class="hoteltype"><?php echo $value["business_type"]?></span>
        <div class="rm_desc"><?php echo $value["short_description"]?> &nbsp;
          <a href="#">View More....</a></div>
          <p><span class="capa_txt">Locations:</span>
            <span class="capa_data"><?php echo $value["address"]?></span></p>
            <div class="rm_review_cont pull-left"><div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
            <div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
            <div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
            <div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
            <div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div> 
            <span class="rm_review">0 Reviews</span></div> 
            <span class="rm_left pull-right">Hurry! 
              <span class="cat_remain_rm_qty_8">#</span> rooms left</span>
              <div class="rm_amenities_cont"> 
                <i class="material-icons" style="font-size:36px">rss_feed</i>
                <i class="material-icons" style="font-size:36px">location_on</i>
                <i class="material-icons" style="font-size:36px">pool</i>
                <img src="/img/rf/11.png" class="rm_amen"></div>
<div class="btn-group" data-toggle="buttons-radio">
                  <button id="btn-game" data-target="<?="game_container_" . $key ?>" class="btn btn btn-primary" type="button">View Rooms</button>
                   <button id="btn-video" data-target="video_container" class="btn btn btn-primary" type="button">Photos</button>


</div>

                                                          </div>


 

<?php 
 
  
  foreach($value["rooms"] as $room_key => $room_value):

?>

<?php

$room = $room_value["room_id"];
$hotel = $value["hotel_id"];

$_SESSION["hotel_id"] = $hotel;

$_SESSION["room_id"] = $room;

?>
<div class="container1" id="<?="game_container_" . $key ?>">


  <div class="col-sm-12 room_cont">
  

                            <div class="row">
                              <div class="col-sm-4"> 




      <a href="#"> <img src="https://demo.qloapps.com/24-home_default/super-delux-rooms.jpg" class="img-responsive"> </a></div>
   
      <div class="col-sm-8">
        <p class="rm_heading"><?php echo $room_value["room_name"] ?></p>
         <span class="hoteltype"><?php echo $room_value["description"]?></span>
          <a href="#">View More....</a></div>

         
            <div class="rm_review_cont pull-left"><div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
            <div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
            <div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
            <div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
            <div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div> 
            <span class="rm_review">0 Reviews</span></div> 
            <span class="rm_left pull-right">Hurry! 
              <span class="cat_remain_rm_qty_8">#</span> rooms left</span>
              <div class="rm_amenities_cont"> 
                <i class="material-icons" style="font-size:36px">rss_feed</i>
                <i class="material-icons" style="font-size:36px">location_on</i>
                <i class="material-icons" style="font-size:36px">pool</i>
                <img src="/img/rf/11.png" class="rm_amen">

              <span class="pull-left rm_price_val ">P<?php echo $room_value["price"]?></span> 
                  <span class="pull-left rm_price_txt">/Per Night</span></div>
                  <a cat_rm_check_in="2018-11-08" cat_rm_check_out="2018-11-15" href="resultpagee2.php" rm_product_id="8" cat_rm_book_nm_days="7" data-id-product-attribute="0" data-id-product="8" class="btn btn-default button button-medium ajax_add_to_cart_button pull-right"><span>Book Now</span></a>
                <div class="btn-group" data-toggle="buttons-radio">
                  
                
                  
                </div></div></div>
</div></div>
          

              <?php endforeach;
            endforeach;
             ?>


                


               



               <script>
                 $(document).ready(function() {

    $('.container1').hide();
    $('.btn-group button').click(function(){
        var target = "#" + $(this).data("target");
        $(".container1").not(target).hide();
        $(target).show();
    });

});
               </script> 

 


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>