<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
//require_once '../heroku.connection.php';
require_once '../connection.php';


$query = mysqli_query($db, "SELECT * FROM testimonies");


if (mysqli_num_rows($query) > 0) {
	$testimonies_arr = array();
	$testimonies_arr['testimonies'] = array();

	while ($row = mysqli_fetch_assoc($query)) {
		extract($row);

		$testimonies = array(
			'id' => $id,
			'name' => $name,
			'comment' => $comment,
			'date' => $date
		);

		// Push Arrays to services array Variable

		array_push($testimonies_arr['testimonies'], $testimonies);
	}

	// Encode to json and output

	echo json_encode($testimonies_arr);
}else{
	echo json_encode(array(
			'message' => 'No Task Found'
	));	
}

 ?>