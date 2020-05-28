<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
require_once '../connection.php';

	$data = json_decode(file_get_contents('php://input'));
	$text = $data->text;
	$date = $data->date;
	$checked = $data->checked;

	$query = mysqli_query($db,"INSERT INTO `todos`(`id`, `name`, `date`, `checked`) VALUES (NULL,'$text','$date','$checked')");

	if ($query) {
		$response = array('message' => 'Task Added Successfully', 'type' => 'success');

		echo json_encode($response);
	}else{
		$response = array('message' => 'Fail to Add Task', 'type' => 'success');

		echo json_encode($response);
	}

 ?>