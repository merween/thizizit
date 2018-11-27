
$(document).ready(function(){
 $('#add_button').click(function(){
  $('#user_form')[0].reset();
  $('.modal-title').text("Add Description");
  $('#action').val("Add");
  $('#operation').val("Add");
  $('#user_uploaded_image').html('');
  $('#user_uploaded_image1').html('');
  $('#user_uploaded_image2').html('');
  $('#user_uploaded_image3').html('');

  $('#action').css({"display": "inline"});
    $('#operation').css({"display": "inline"});
    $('#user_image').css({"display": "inline"});
    $('#user_image1').css({"display": "inline"});
    $('#user_image2').css({"display": "inline"});
    $('#user_image3').css({"display": "inline"});

    $("#text_name").attr("disabled", false); 
    $("#text_name").css({"border": "1px solid #ccc"});

    $("#text_occupancy").attr("disabled", false); 
    $("#text_occupancy").css({"border": "1px solid #ccc"});
    
    $("#text_rate").prop('disabled', false); 
    $("#text_rate").css({"border": "1px solid #ccc"});

    $("#text_type").prop('disabled', false); 
    $("#text_type").css({"border": "1px solid #ccc"});
    
    $("#text_description").prop('disabled', false); 
    $("#text_description").css({"border": "1px solid #ccc"});
    
    $("#text_stat").prop('disabled', false); 
    $("#text_stat").css({"border": "1px solid #ccc"});

    $("#text_qty").prop('disabled', false); 
    $("#text_qty").css({"border": "1px solid #ccc"});

    $("#text_area").prop('disabled', false); 
    $("#text_area").css({"border": "1px solid #ccc"});

    $("#text_bed").prop('disabled', false); 
    $("#text_bed").css({"border": "1px solid #ccc"});
  
$("#label_hotel").text("Enter Hotel Name");
    $("#label_name").text("Enter Room Name");
    $("#label_occupancy").text("Enter Adult");
    $("#label_rate").text("Enter Child");
    $("#label_type").text("Enter Room Type");
    $("#label_description").text("Enter Description");
    $("#label_bed").text("Enter Price");
    $("#label_area").text("Enter Area");
    $("#label_quantity").text("Enter Quantity");
    $("#label_status").text("Enter Status");
    $("#label_image1").text("Enter Image(1)");
    $("#label_image2").text("Enter Image(2)");
    $("#label_image3").text("Enter Image(3)");
    $("#label_image4").text("Enter Image(4)");
    $("#reset_btn").show();
    $("#inclusion_tbl").show();
    $("#refresh_btn").hide();
    $("#update_inclu").hide();


 });
 var type = $('#get_type').val();
 var dataTable = $('#user_data').DataTable({
 
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"fetch.php",
   data:{type:type},
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[0, 3, 4],
    "orderable":false,
   },
  ],

 });

 $(document).on('submit', '#user_form', function(event){
  event.preventDefault();
  var roomname = $('#text_name').val();
  var adult = $('#text_adult').val();
  var child = $('#text_child').val();
  var price = $('#text_price').val();
  var type = $('#text_type').val();
  var bed = $('#text_bed').val();
  var description = $('#text_description').val();
  var extension = $('#user_image').val().split('.').pop().toLowerCase();
  var extension1 = $('#user_image1').val().split('.').pop().toLowerCase();
  var extension2 = $('#user_image2').val().split('.').pop().toLowerCase();

  if(extension != '')
  {
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#user_image').val('');
    return false;
   }
  }

  if(extension1 != '')
  {
   if(jQuery.inArray(extension1, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#user_image1').val('');
    return false;
   }
  }  

  if(extension2 != '')
  {
   if(jQuery.inArray(extension2, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#user_image2').val('');
    return false;
   }
  }  



  
  if(roomname != '' && adult != '' && child != '' && price != '' && type != '' && bed != '' && description != '')
  {
   $.ajax({
    url:"insert.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#user_form')[0].reset();
     $('#userModal').modal('hide');
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.update', function(){
  var user_id = $(this).attr("id");
  $.ajax({
   url:"fetch_single.php",
   method:"POST",
   data:{user_id:user_id},
   dataType:"json",
   success:function(data)
   {
    $('#userModal').modal('show');
    $('.modal-title').text("Edit Description");
    $('#user_id').val(user_id);
    $('#user_uploaded_image').html(data.user_image);
    $('#user_uploaded_image1').html(data.user_image1);
    $('#user_uploaded_image2').html(data.user_image2);
    $('#user_uploaded_image3').html(data.user_image3);
    $('#action').val("Edit");
    $('#operation').val("Edit");

    $("#text_name").prop('disabled', false); 
    $("#text_name").css({"border": "1px solid #ccc"});
    $('#text_name').val(data.text_name);

    $("#text_occupancy").prop('disabled', false); 
    $("#text_occupancy").css({"border": "1px solid #ccc"});
    $('#text_occupancy').val(data.text_occupancy);

    $("#text_price").prop('disabled', false); 
    $("#text_price").css({"border": "1px solid #ccc"});
    $('#text_price').val(data.text_price);

    $("#text_type").prop('disabled', false); 
    $("#text_type").css({"border": "1px solid #ccc"});
    $('#text_type').val(data.text_type);

    $("#text_description").prop('disabled', false); 
    $("#text_description").css({"border": "1px solid #ccc"});
    $('#text_description').val(data.text_description);

    $("#text_adult").prop('disabled', false); 
    $("#text_adult").css({"border": "1px solid #ccc"});
    $('#text_adult').val(data.text_adult);

    $("#text_child").prop('disabled', false); 
    $("#text_child").css({"border": "1px solid #ccc"});
    $('#text_child').val(data.text_child);

    $("#text_bed").prop('disabled', false); 
    $("#text_bed").css({"border": "1px solid #ccc"});
    $('#text_bed').val(data.text_bed);



    $("#label_name").text("Enter Room Name");
    $("#label_occupancy").text("Enter Adult");
    $("#label_rate").text("Enter Child");
    $("#label_type").text("Enter Room Type");
    $("#label_description").text("Enter Description");
    $("#label_bed").text("Enter Price");

    $('#action').css({"display": "inline"});
    $('#operation').css({"display": "inline"});
    $('#user_image').css({"display": "inline"});
    $("#text_date").css({"border": "1px solid #ccc", "display": "none"});
    $("#inclusion_tbl").css({"display": "none"});
    $("#refresh_btn").show();
    $("#update_inclu").hide();
   }
  })
 });
 



 $(document).on('click', '.view', function(){
  var user_id = $(this).attr("id");
  $.ajax({
   url:"fetch_single2.php",
   method:"POST",
   data:{user_id:user_id},
   dataType:"json",
   success:function(data)
   {
    $('#userModal').modal('show');
    $("#text_name").prop('disabled', true); 
    $("#text_name").css({"background-color": "transparent", "border": "none", "cursor": "auto"});
    $('#text_name').val(data.text_name);

    $("#text_occupancy").prop('disabled', true); 
    $("#text_occupancy").css({"background-color": "transparent", "border": "none", "cursor": "auto"});
    $('#text_occupancy').val(data.text_occupancy);

    $("#text_rate").prop('disabled', true); 
    $("#text_rate").css({"background-color": "transparent", "border": "none", "cursor": "auto"});
    $('#text_rate').val(data.text_rate);

    $("#text_type").prop('disabled', true); 
    $("#text_type").css({"background-color": "transparent", "border": "none", "cursor": "auto" , "display": "inline", "-webkit-appearance": "none", "-moz-appearance": "none", "text-indent": "1px", "text-overflow": "", "margin-bottom": "10px"});
    $('#text_type').val(data.text_type);

    $("#text_description").prop('disabled', true); 
    $("#text_description").css({"background-color": "transparent", "border": "none", "cursor": "auto"});
    $('#text_description').val(data.text_description);

    $("#text_stat").prop('disabled', true); 
    $("#text_stat").css({"background-color": "transparent", "border": "none", "cursor": "auto" , "display": "inline", "-webkit-appearance": "none", "-moz-appearance": "none", "text-indent": "1px", "text-overflow": ""});
    $('#text_stat').val(data.text_stat);

    $("#text_qty").prop('disabled', true); 
    $("#text_qty").css({"background-color": "transparent", "border": "none", "cursor": "auto"});
    $('#text_qty').val(data.text_qty);

    $("#text_bed").prop('disabled', true); 
    $("#text_bed").css({"background-color": "transparent", "border": "none", "cursor": "auto"});
    $('#text_bed').val(data.text_bed);

    $("#text_area").prop('disabled', true); 
    $("#text_area").css({"background-color": "transparent", "border": "none", "cursor": "auto"});
    $('#text_area').val(data.text_area);

    $("#label_name").text("Room Name");
    $("#label_occupancy").text("Adult");
    $("#label_rate").text("Child");
    $("#label_type").text("Price");
    $("#label_description").text("Room Type");
    $("#label_bed").text("Enter Description");
    $("#label_image1").text("Room Image(1)");
    $("#label_image2").text("Room Image(2)");
    $("#label_image3").text("Room Image(3)");
    $("#label_image4").text("Room Image(4)");

    $("#user_image").css({"display": "none"});
    $("#user_image1").css({"display": "none"});
    $("#user_image2").css({"display": "none"});
    $("#user_image3").css({"display": "none"});


    $('.modal-title').text("Room Information");
    $('#user_id').val(user_id);
    $('#user_uploaded_image').html(data.user_image);
    $('#user_uploaded_image1').html(data.user_image1);
    $('#user_uploaded_image2').html(data.user_image2);
    $('#user_uploaded_image3').html(data.user_image3);
    $('#action').css({"display": "none"});
    $('#operation').css({"display": "none"});
   }
  })
 });




 $(document).on('click', '.delete', function(){
  var user_id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this?"))
  {
   $.ajax({
    url:"delete.php",
    method:"POST",
    data:{user_id:user_id},
    success:function(data)
    {
     alert("Data Deleted");
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   return false; 
  }
 });

 $(document).on('click', '.virtual', function(){
  var user_id = $(this).attr("id");
   $.ajax({
    url:"360view.php",
    method:"POST",
    data:{user_id:user_id},
    success:function(data)
    {
      $("#virtual_image").fadeIn();
      $("#close_modal").fadeIn();
      $("#virtual_image").html(data);
    }
   });
 });
 
});

