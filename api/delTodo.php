<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
require_once '../heroku.connection.php';
require_once '../connection.php';

	$data = json_decode(file_get_contents('php://input'));
	$id = $data->id;
	$query = mysqli_query($db,"DELETE FROM todos WHERE id ='$id'");

	if ($query) {
		$response = array('message' => 'Task Deleted Successfully', 'type' => 'success');

		echo json_encode($id);
	}

 ?>