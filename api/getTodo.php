<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
require_once '../connection.php';
require_once '../heroku.connection.php';


$query = mysqli_query($db, "SELECT * FROM todos");


if (mysqli_num_rows($query) > 0) {
	$todo_arr = array();
	$todo_arr['data'] = array();

	while ($row = mysqli_fetch_assoc($query)) {
		extract($row);

		$todo_items = array(
			'id' => $id,
			'name' => $name,
			'date' => $date,
			'checked' => $checked

		);

		// Push Arrays to todo array Variable

		array_push($todo_arr['data'], $todo_items);
	}

	// Encode to json and output

	echo json_encode($todo_arr);
}else{
	echo json_encode(array(
			'message' => 'No Task Found'
	));	
}



 ?>