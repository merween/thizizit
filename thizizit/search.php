<?php 
include("admin/pages/connect.php");
 
if(isset($_POST['search'])){
	$search = $_POST['search'];

	$searchQuery = mysqli_query($connect, "SELECT hr.*, r.* FROM hotel_registration as hr left join rooms as r on hr.hotel_id = r.hotel_id where hr.hotel_name like '%".$search."%' or r.room_name like '%".$search."%'");

	$resultSet = array();

	while ($row = mysqli_fetch_assoc($searchQuery)){

		//if(!array_key_exists($row["hotel_id"], $resultSet)) {
			$resultSet[$row["hotel_id"]]["hotel_name"] = $row["hotel_name"];
			$resultSet[$row["hotel_id"]]["business_type"] = $row["business_type"];
			$resultSet[$row["hotel_id"]]["short_description"] = $row["short_description"];
			$resultSet[$row["hotel_id"]]["address"] = $row["address"];
			$resultSet[$row["hotel_id"]]["email_address"] = $row["email_address"];
			$resultSet[$row["hotel_id"]]["phone_number"] = $row["phone_number"];
			$resultSet[$row["hotel_id"]]["hotel_facilities"] = $row["hotel_facilities"];

			// adding rooms in hotel
			//$resultSet[$row["hotel_id"]]["rooms"]["room_id"] = $row["room_id"];
			$resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["room_name"] = $row["room_name"];
			$resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["description"] = $row["description"];
			$resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["price"] = $row["price"];
			$resultSet[$row["hotel_id"]]["rooms"][$row["room_id"]]["room_img"] = $row["room_img"];
		//}

	}
	echo "<pre>";
//	var_dump($resultSet);
	echo "</pre>";


	echo "Hotels";
	echo '<table border ="1">';

	foreach($resultSet as $key => $value) {

		//var_dump($value);
	echo '<tr>';
	echo '<td>'. $value["hotel_name"] .'</td>';
	echo '<td>'. $value["short_description"] .'</td>';
	echo '<td>'. $value["address"] .'</td>';
	echo '<td>'. $value["email_address"] .'</td>';
	echo '<td>'. $value["phone_number"] .'</td>';
	echo '<td>'. $value["hotel_facilities"] .'</td>';
	echo '</tr>';

		if(count($value["rooms"]) > 0) {
			echo '<tr>';
			echo '<td colspan="6">';
			echo '<table border ="1">';				
			foreach($value["rooms"] as $room_key => $room_value) {
				echo '<tr>';
				echo '<td>'. $room_value["room_name"] .'</td>';
				echo '<td>'. $room_value["description"] .'</td>';
				echo '<td>'. $room_value["price"] .'</td>';
				echo '<td>'. $room_value["room_img"] .'</td>';
				echo '</tr>';
			}	
			echo "</table>";
			echo '</td>';
			echo '</tr>';
		}
	}

	

	echo "</table>";
}

?>

search page