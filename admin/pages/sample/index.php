<html>
<head>
<title>Ajax Image Upload Using PHP and jQuery</title>
<link rel="stylesheet" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="script.js"></script>
</head>
<body>
<div class="main">
<h1>Ajax Image Upload</h1><br/>
<hr>
<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
<div id="image_preview"><img id="previewing" src="noimage.png" /></div>
<div id="image_preview1"><img id="previewing1" src="noimage.png" /></div>
<div id="image_preview2"><img id="previewing2" src="noimage.png" /></div>
<hr id="line">
<div id="selectImage">

<label>Select Your Image</label><br/>
<input type="file" name="file" id="file" required />
<input type="file" name="file1" id="file1" required />
<input type="file" name="file2" id="file2" required />

<input type="submit" value="Upload" class="submit" name="submit" />
</div>
</form>
</div>
<h4 id='loading' >loading..</h4>
<div id="message"></div>
<div id="message1"></div>
<div id="message2"></div>
</body>
</html>

<script type="text/javascript">

$(function() {
$("#file2").change(function() {
$("#message2").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match1[1]) || (imagefile==match[2])))
{
$('#previewing2').attr('src','noimage.png');
$("#message2").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded2;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded2(e) {
$("#file2").css("color","green");
$('#image_preview2').css("display", "block");
$('#previewing2').attr('src', e.target.result);
$('#previewing2').attr('width', '250px');
$('#previewing2').attr('height', '230px');
};
</script>