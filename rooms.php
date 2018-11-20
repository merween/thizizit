<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBukmo</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/half-slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body><!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">LakbayHub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span></span> class="navbar-toggler-icon"&gt;
        </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="register.php">Sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Log in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Home
                <span class="sr-only"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/photo1.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Filipino Engine hotel</h3>
              <p>Unforgettable Experience.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/photo2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Good People</h3>
              <p>Enjoy &amp; Fun Experience</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/photo3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Trusted Services</h3>
              <p>Discounted prices</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>



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
               <label class="control-label" for="">Hotel Location</label> 
               <input class="form-control" placeholder="Enter a city, state, country name" type="text" id="hotel_location" name="hotel_location" autocomplete="off" value="DefCity, Alabama, United States" city_cat_id="14">
               <div class="dropdown">
                <ul class="location_search_results_ul" style="display: none;">
                </ul>
              </div>
            </div>
            <div class="form-group htl_nm_cont "> 
              <label class="control-label" for="">Hotel Name</label>
              <div class="dropdown">
               <button class="btn btn-default hotel_cat_id_btn dropdown-toggle" type="button" data-toggle="dropdown">
                <span id="hotel_cat_name" class="pull-left">The Hotel Prime</span> 
                <input type="hidden" id="hotel_cat_id" name="hotel_cat_id" value="15"> 
                <input type="hidden" id="id_hotel" name="id_hotel" value="1">
                 <input type="hidden" id="max_order_date" name="max_order_date" value="2019-09-18">
                  <span class="arrow_span"> 
                    <i class="icon icon-angle-down"></i> </span>
                     </button>
                     <ul class="dropdown-menu hotel_dropdown_ul">
                      <li class="hotel_name" data-id-hotel="1" data-hotel-cat-id="15" data-max_order_date="2019-09-18"> The Hotel Prime</li>
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
                          <div class="col-sm-12 room_cont">
                            <div class="row">
                              <div class="col-sm-4"> 


                               <!-- Page Content -->



                                <a href="https://demo.qloapps.com/en/home/8-super-delux-rooms.html?date_from=2018-11-08&amp;date_to=2018-11-15"> <img src="https://demo.qloapps.com/24-home_default/super-delux-rooms.jpg" class="img-responsive"> </a></div>
      <div class="col-sm-8">
        <p class="rm_heading">Hotels</p>
        <div class="rm_desc">Fashion axe kogi yuccie, ramps shabby chic direct trade before they sold out distillery bicycle rights. Slow-carb +1 quinoa VHS. +1 brunch trust fund, meggings chartreuse sustainable everyday carry tumblr hoodie tacos tilde ramps post-ironic fixie.&nbsp;
          <a href="https://demo.qloapps.com/en/home/8-super-delux-rooms.html?date_from=2018-11-08&amp;date_to=2018-11-15">View More....</a></div>
          <p><span class="capa_txt">Locations:</span>
            <span class="capa_data"> Tagaytay</span></p>
            <div class="rm_review_cont pull-left"><div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
            <div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
            <div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
            <div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
            <div class="rm_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div> 
            <span class="rm_review">0 Reviews</span></div> 
            <span class="rm_left pull-right">Hurry! 
              <span class="cat_remain_rm_qty_8">5</span> rooms left</span>
              <div class="rm_amenities_cont"> 
                <img src="/img/rf/8.png" class="rm_amen"> 
                <img src="/img/rf/9.png" class="rm_amen"> 
                <img src="/img/rf/10.png" class="rm_amen"> 
                <img src="/img/rf/11.png" class="rm_amen"></div>
                
                  
                </div>
              </div>
              </div>
                
                



 


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</div></div></div></div></div></div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>