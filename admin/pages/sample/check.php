<?php
$db = mysqli_connect("localhost", "root", "", "mydb");


$amenities = mysqli_query($db, "SELECT * FROM amenities");
$row=mysqli_fetch_array($amenities);
$a=$row["amenities_name"];
$b=explode(",",$a);	  

if(isset($_REQUEST["submit"]))
{	
	$test=$_POST["education"];

	foreach ($test as $test1)
	{
	$query = mysqli_query($db, "INSERT INTO amenities (amenities_name) VALUES ('$test1')");
	header("Location: check.php");
	}
	
	
}
	

?>


<form method="post" action="">
<table border="1" align="center">

<tr>
<td>Education</td>

<?php while ($row = mysqli_fetch_array($amenities)) { ?>
<td><input type="checkbox" name="education[]" value="<?php echo $row['amenities_name']; ?>"><?php echo $row['amenities_name'];; ?>
<?php } ?>
</td>

</tr>

<tr>
<td><input type="submit" value="submit" name="submit"></td>
</tr>
</table>
</form>