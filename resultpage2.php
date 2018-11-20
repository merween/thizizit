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
          <span></span> class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="register.php">Sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Log in</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
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

    <div class="primary_block row">
      <div class="header-rmsearch-wrapper">
        <div class="header-rmsearch-primary">
          <div class="container">
            <div class="row header-rmsearch-inner-wrapper">
              <form method="POST" id="search_hotel_block_form">
                <div class="form-group col-sm-6 col-lg-3 "> 
    <input type="text" class="form-control header-rmsearch-input" id="hotel_location" name="hotel_location" autocomplete="off" placeholder="Hotel Location" value="DefCity, Alabama, United States">
    <div class="dropdown">
      <ul class="location_search_results_ul" style="display: none;"></ul></div></div>
      <div class="form-group col-sm-6 col-lg-3 ">
        <div class="dropdown"> 
          <button class="form-control header-rmsearch-input " type="button" data-toggle="dropdown"> 
            <span id="hotel_cat_name" class="pull-left">The Hotel Prime</span> 
    <input type="hidden" id="hotel_cat_id" name="hotel_cat_id" value="15"> 
    <input type="hidden" id="id_hotel" name="id_hotel" value="1"> 
    <input type="hidden" id="max_order_date" name="max_order_date" value="2019-09-18"> 
    <span class="arrow_span"> <i class="icon icon-angle-down"></i> </span> </button>
    <ul class="dropdown-menu hotel_dropdown_ul">
      <li class="hotel_name" data-id-hotel="" data-hotel-cat-id="15" data-max_order_date="2019-09-18"> The Hotel Prime</li></ul></div></div>
      <div class="form-group col-sm-4 col-lg-2 "> 
        <input type="text" class="form-control header-rmsearch-input input-date hasDatepicker" id="check_in_time" name="check_in_time" autocomplete="off" placeholder="Check In Date" value="22-11-2018"></div>
        <div class="form-group col-sm-4 col-lg-2 "> 
          <input type="text" class="form-control header-rmsearch-input input-date hasDatepicker" id="check_out_time" name="check_out_time" autocomplete="off" placeholder="Check Out Date" value="24-11-2018"></div>
          <div class="form-group col-sm-4 col-lg-2 "> 
            <button type="submit" class="btn btn-default button button-medium exclusive" name="product_page_search_submit" id="search_room_submit"> <span>Search Now</span> </button></div>
            </form></div></div></div></div>
            <div class="pb-left-column col-xs-12 col-sm-8 col-md-8" style="border:1px solid #cccccc">
              <div class="room_hotel_name_block">
                <div class="hotel_name_block"> <span>General Rooms&nbsp;-&nbsp;The Hotel Prime</span></div>
                <div class="room_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
                <div class="room_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
                <div class="room_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div>
                <div class="room_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div><div class="room_ratting_no" style="background-image:url(/modules/hotelreservationsystem/views/img/Slices/icons-sprite.png);"></div> 
                <span class="num_reviews">0 &nbsp;Reviews</span></div>
                <div id="image-block" class="clearfix"> <span id="view_full_size"> 
                  <img id="bigpic" itemprop="image" src="https://demo.qloapps.com/26-large_default/super-delux-rooms.jpg" title="General Rooms" alt="General Rooms" width="458" height="458"> </span></div>
                  <div id="views_block" class="clearfix "> 
                    <span class="view_scroll_spacer"> <a id="view_scroll_left" class="" title="Other views" href="javascript:{}" style="cursor: default; opacity: 0;"> Previous </a> </span>
                    <div id="thumbs_list">
                      <ul id="thumbs_list_frame" style="width: 392px;">
                        <li id="thumbnail_24"> <a href="https://demo.qloapps.com/24-thickbox_default/super-delux-rooms.jpg" data-fancybox-group="other-views" class="fancybox" title="General Rooms"> 
                          <img class="img-responsive" id="thumb_24" src="https://demo.qloapps.com/24-cart_default/super-delux-rooms.jpg" alt="General Rooms" title="General Rooms" height="80" width="80" itemprop="image"> </a></li>
                          <li id="thumbnail_25"> <a href="https://demo.qloapps.com/25-thickbox_default/super-delux-rooms.jpg" data-fancybox-group="other-views" class="fancybox" title="General Rooms"> 
                            <img class="img-responsive" id="thumb_25" src="https://demo.qloapps.com/25-cart_default/super-delux-rooms.jpg" alt="General Rooms" title="General Rooms" height="80" width="80" itemprop="image"> </a></li>
                            <li id="thumbnail_26"> <a href="https://demo.qloapps.com/26-thickbox_default/super-delux-rooms.jpg" data-fancybox-group="other-views" class="fancybox shown" title="General Rooms"> 
                              <img class="img-responsive" id="thumb_26" src="https://demo.qloapps.com/26-cart_default/super-delux-rooms.jpg" alt="General Rooms" title="General Rooms" height="80" width="80" itemprop="image"> </a></li>
                              <li id="thumbnail_27" class="last"> <a href="https://demo.qloapps.com/27-thickbox_default/super-delux-rooms.jpg" data-fancybox-group="other-views" class="fancybox" title="General Rooms"> 
                                <img class="img-responsive" id="thumb_27" src="https://demo.qloapps.com/27-cart_default/super-delux-rooms.jpg" alt="General Rooms" title="General Rooms" height="80" width="80" itemprop="image"> </a></li></ul></div> 
                                <a id="view_scroll_right" title="Other views" href="javascript:{}" style="cursor: pointer; opacity: 1; display: block;"> Next </a></div>
                                <p class="resetimg clear no-print"> <span id="wrapResetImages" style="display: none;"> <a href="https://demo.qloapps.com/en/home/8-super-delux-rooms.html" data-id="resetImages"> <i class="icon-repeat"></i> Display all pictures </a> </span></p> 
                                <section class="page-product-box col-sm-12">
                                  <ul class="nav nav-tabs product_description_tabs">
                                    <li class="active">
                                      <a href="#room_info_tab" class="idTabHrefShort" data-toggle="tab">Room Information</a></li>
                                      <li class="">
                                        <a href="#idTab5" class="idTabHrefShort selected" data-toggle="tab">Reviews</a></li></ul>
                                        <div class="tab-content panel product_description_tabs_contents">
                                          <div id="room_info_tab" class="tab-pane active">
                                            <div id="room_info_tab_information">
                                              <div class="info_margin_div room_description"> Fashion axe kogi yuccie, ramps shabby chic direct trade before they sold out distillery bicycle rights. Slow-carb +1 quinoa VHS. +1 brunch trust fund, meggings chartreuse sustainable everyday carry tumblr hoodie tacos tilde ramps post-ironic fixie.<br> <strong>Room features -</strong> &nbsp;
                                                <img width="15px" src="/img/rf/8.png"> &nbsp;
                                                <img width="15px" src="/img/rf/9.png"> &nbsp;
                                                <img width="15px" src="/img/rf/10.png"> &nbsp;
                                                <img width="15px" src="/img/rf/11.png"></div>
            <div class="info_margin_div">
              <div class="room_info_heading"> <span>Hotel Features</span></div>
              <div class="room_info_content row"> <span class="col-sm-4">Business Services</span> 
                <span class="col-sm-4">Business Center</span> 
                <span class="col-sm-4">Board room</span> 
                <span class="col-sm-4">Fax Machine</span> 
                <span class="col-sm-4">Internet Access</span> 
                <span class="col-sm-4">Complementry</span>
                <span class="col-sm-4">Transfer Available</span> 
                <span class="col-sm-4">NewsPaper In Lobby</span>
                <span class="col-sm-4">Welcome Drinks</span> 
                <span class="col-sm-4">DiscoTheatre</span> 
                <span class="col-sm-4">Casino</span> 
                <span class="col-sm-4"> Amphitheatre</span> 
                <span class="col-sm-4">Mini Theatre</span></div></div>
                <div class="info_margin_div">
                  <div class="room_info_heading"> <span>Hotel Policies</span></div>
                  <div class="room_info_content"><p class="">1. intelligentsia tattooed pop-up salvia asymmetrical mixtape meggings tousled ramps VHS cred. 2. intelligentsia tattooed pop-up salvia asymmetrical mixtape meggings tousled ramps VHS cred. 3. intelligentsia tattooed pop-up salvia asymmetrical mixtape meggings tousled ramps VHS cred. 4. intelligentsia tattooed pop-up salvia asymmetrical mixtape meggings tousled ramps VHS cred.</p></div></div></div></div>
                  <div id="idTab5" class="tab-pane">
                    <div id="product_comments_block_tab"><p class="align_center"> 
                      <a id="new_comment_tab_btn" class="btn button button-medium" href="#new_comment_form"> <span>Be the first to write your review!</span> </a></p>
                      <div class="new_comment_form_outer" style="display: none;">
                        <div id="new_comment_form">
                          <form id="id_new_comment_form" action="#">
                            <div class="row">
                              <div class="new_comment_form_content col-xs-12 col-sm-12">
                                <div id="new_comment_form_error" class="error" style="display: none;background-color: #cd5d5d;color: #ffffff;font-size: 13px;padding-left: 10px;font-weight:400;"><ul></ul></div> 
                                <label for="comment_title"> Title: <sup class="required">*</sup> </label> 
                                <input id="comment_title" name="title" type="text" value=""><ul id="criterions_list"><li> <label>Quality:</label>
                                  <div class="star_content"> 
                                    <input type="hidden" name="criterion[1]" value="4">
                                    <div class="cancel"><a title="Cancel Rating"></a></div>
                                    <div class="star star_on"><a title="1">1</a></div>
                                    <div class="star star_on"><a title="2">2</a></div> 
                                    <div class="star star_on"><a title="3">3</a></div> 
                                    <div class="star star_on"><a title="4">4</a></div> 
                                    <div class="star"><a title="5">5</a></div></div>
                                    <div class="clearfix"></div></li></ul> 
                                    <label for="content"> Description: <sup class="required">*</sup> </label>
                                    <textarea id="content" name="content"></textarea>
                                    <div id="new_comment_form_footer"> 
                                      <input id="id_product_comment_send" name="id_product" type="hidden" value="8"><p class="fr review_submit_div"> 
                                        <button id="submitNewMessage" name="submitMessage" type="submit" class="btn button button-medium"> <span>Make Review</span> </button>&nbsp; 
                                        <button id="cancelreview" name="cancelreview" type="submit" class="btn button button-medium"> <span>Cancel</span> </button></p><div class="clearfix"></div></div></div></div>
                                      </form></div></div></div></div>
                                        <style type="text/css">.no_reviews_cond_block
  {
    color: #404040;
    font-size:15px;
    font-weight:400;
  }
  .name_person
  {
    padding: 10px;
    color: #404040;
    font-size:15px;
    font-weight:700;
  }
  .review_title
  {
    color: #404040;
    font-size:15px;
    font-weight:700;
  }
  .review_content
  {
    color: #404040;
    font-size:15px;
    font-weight:400;
    line-height: 23px;
    padding-top: 10px;
  }
  .review_container
  {
    padding:20px;
    border: 1px solid #cccccc;
  }
  .reviews_blogs
  {
    margin-bottom: 25px;
  }
  .comment_date
  {
    font-size:15px;
    
    font-weight:400;
    color: #9A9A9A;
    margin-left: 10px;
  }
  .review_submit_div
  {
    float: left!important;
  }
  .cancel, .star
  {
    width: 25px;
    font-size: 21px;
    height: 21px;

  }

  .review_container
  {
    border: 1px solid #cccccc;
      padding: 20px;
      position: relative;
  }
  .review_container:after, .review_container:before
  {
    border: medium solid transparent;
      bottom: 100%;
      content: " ";
      height: 0;
      left: 7%;
      pointer-events: none;
      position: absolute;
      width: 0;
  }

  .review_container:after
  {
    border-color: rgba(136, 183, 213, 0) rgba(136, 183, 213, 0) #ffffff;
      border-width: 9px;
      margin-left: -22px;
  }
  .review_container:before
  {
    border-color: rgba(245, 233, 171, 0) rgba(245, 233, 171, 0) #cccccc;
      border-width: 11px;
      margin-left: -24px;
  }
</style></div> </section></div>
<div class="pb-right-column col-xs-12 col-sm-4 col-md-4"><p class="hidden"> 
  <input type="hidden" name="token" value="0ecd063afa19b47affc3b1fd93ca1672"> 
  <input type="hidden" name="id_product" value="8" id="product_page_product_id"> 
  <input type="hidden" name="add" value="1"> 
  <input type="hidden" name="id_product_attribute" id="idCombination" value=""></p>
  <div class="booking-form">
    <div class="total_booking_price_block">
      <p class="booking_total_price"> 
        <span class="product_original_price ">$1,000.00</span> 
        <span class="room_type_current_price" style="display:none;">$1,000.00</span> /Night</p></div>
        <div class="arrow-down-div">
          <div class="arrow-down"></div></div>
          <div class="booking_room_fields">
  <form action="" method="post">
    <div class="form-group"> 
      <label for="" class="control-label">Hotel Location</label> 
      <input type="text" class="form-control" name="hotel_location" id="hotel_location" value="DefCity, Alabama, United States" readonly="true"></div>
      <div class="form-group"> 
        <label for="" class="control-label">Check In Date</label> 
        <input type="text" class="form-control hasDatepicker" name="room_check_in" id="room_check_in" value="22-11-2018" autocomplete="off" readonly=""></div>
        <div class="form-group"> 
          <label for="" class="control-label">Check Out Date</label> 
          <input type="text" class="form-control hasDatepicker" name="room_check_out" id="room_check_out" value="24-11-2018" autocomplete="off" readonly=""></div>
          <div class="room_unavailability_date_error_div"></div>
          <div class="form-group unvail_rooms_cond_display">
            <div id="quantity_wanted_p"> <label for="quantity_wanted">No. of Rooms</label>
              <a href="#" data-field-qty="qty" class="btn btn-default button-minus product_quantity_down"> <span> <i class="icon-minus"></i> </span> </a> 
              <input type="hidden" id="num_days" value="2"> 
              <input type="hidden" id="max_avail_type_qty" value="3"> 
              <input autocomplete="off" type="text" min="1" name="qty" id="quantity_wanted" class="text" value="1" style="border: 1px solid rgb(189, 194, 201);">
              <a href="#" data-field-qty="qty" class="btn btn-default button-plus product_quantity_up"> <span><i class="icon-plus"></i></span> </a> <span class="clearfix"></span></div></div>
              <div class="room_unavailability_qty_error_div"></div>
              <div class="form-group unvail_rooms_cond_display"> <label for="" class="control-label">Total Amount</label>
                <div class="total_price_block"><p class="col-sm-5 text-center"> $2,000.00</p></div>
                <div class="num_quantity_alert col-sm-7"><p class="pull-right"> Hurry&nbsp; 
                  <span class="num_searched_avail_rooms">3</span> &nbsp;Rooms Left!</p></div></div>
                  <div class="sold_out_alert" style="display: none;"> <span>Sold Out !!</span></div>
                  <div class="form-group unvail_rooms_cond_display">
                    <p id="add_to_cart" class="buttons_bottom_block no-print"> 
                      <button type="submit" name="Submit" class="exclusive book_now_submit added"> 
                        <span> Book Now </span> 
                      </button></p></div></form></div></div></div>
                    </div>