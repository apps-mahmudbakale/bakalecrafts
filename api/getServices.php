<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
//require_once '../heroku.connection.php';
require_once '../connection.php';


$query = mysqli_query($db, "SELECT * FROM services");


if (mysqli_num_rows($query) > 0) {
	$services_arr = array();
	$services_arr['services'] = array();

	while ($row = mysqli_fetch_assoc($query)) {
		extract($row);

		$services_items = array(
			'service_id' => $service_id,
			'title' => $title,
			'caption' => $caption,
			'body' => $body

		);

		// Push Arrays to services array Variable

		array_push($services_arr['services'], $services_items);
	}

	// Encode to json and output

	echo json_encode($services_arr);
}else{
	echo json_encode(array(
			'message' => 'No Task Found'
	));	
}

 ?>