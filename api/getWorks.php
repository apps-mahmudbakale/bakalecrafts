<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
//require_once '../heroku.connection.php';
require_once '../connection.php';


$query = mysqli_query($db, "SELECT * FROM gallery");


if (mysqli_num_rows($query) > 0) {
	$work_arr = array();
	$work_arr['works'] = array();

	while ($row = mysqli_fetch_assoc($query)) {
		extract($row);

		$works = array(
			'id' => $id,
			'name' => $name,
			'image' => $image
			

		);

		// Push Arrays to services array Variable

		array_push($work_arr['works'], $works);
	}

	// Encode to json and output

	echo json_encode($work_arr);
}else{
	echo json_encode(array(
			'message' => 'No Task Found'
	));	
}

 ?>