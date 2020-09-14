<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
//require_once '../heroku.connection.php';
require_once '../connection.php';


$query = mysqli_query($db, "SELECT * FROM team");


if (mysqli_num_rows($query) > 0) {
	$team_arr = array();
	$team_arr['teams'] = array();

	while ($row = mysqli_fetch_assoc($query)) {
		extract($row);

		$team_members = array(
			'id' => $id,
			'name' => $name,
			'picture' => $picture,
			'rank' => $rank,
			'phone' => $phone,
			'twitter' => $twitter,
			'facebook' => $facebook,
			'instagram' => $instagram,
			'linkedn' => $linkedn

		);

		// Push Arrays to services array Variable

		array_push($team_arr['teams'], $team_members);
	}

	// Encode to json and output

	echo json_encode($team_arr);
}else{
	echo json_encode(array(
			'message' => 'No Task Found'
	));	
}

 ?>