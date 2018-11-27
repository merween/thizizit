<?php
session_start();

include("connect.php");

include("nav.php")




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
<div class="guest_accounts">
	<a href="#"><h5>Guest Account</h5></a>
	<hr />
	<label>Active Account: <span>1</span></label><br />
	<label>Inactive Account: <span>1</span></label><br />
	<span class="glyphicon glyphicon-calendar icon"></span>
</div><br />

<div class="reports">
<h5>Reports</h5>
<hr />
	<label>Cancelled Reservation: <span>1</span></label><br />
	<label>Approved Reservation: <span>1</span></label><br />
	<span class="glyphicon glyphicon-file icon"></span>
</div><br />

<div class="messages">
	<h5>Messages</h5>
	<hr />
	<label>Unseen Messages: <span>1</span></label><br />
	<label>Seen Messages: <span>1</span></label><br />
	<span class="glyphicon glyphicon-envelope icon"></span>
</div><br />

</div>
</body>
</html>

<style type="text/css">
.container
{
	position: absolute;
	width: 77%;
	left: 20%;
	top: 10%;
}
.guest_accounts
{
	width: 33%;
	position: relative;
	background-color: white;
	border-radius: 4px;
	padding: 1%;
	left: 0;
}
.messages
{
	width: 33%;
	position: absolute;
	background-color: white;
	border-radius: 4px;
	padding: 1%;
	left: 35%;
	top: 0;
}
.reports
{
	width: 33%;
	position: absolute;
	background-color: white;
	border-radius: 4px;
	padding: 1%;
	top: 0;
	left: 69.6%;
}
.icon
{
	position: absolute;
	right: 5%;
	top: 53%;
	font-size: 50px;
}
</style>