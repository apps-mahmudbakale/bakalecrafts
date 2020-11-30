<?php 
require_once '../connection.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$uploadDir ='../assets/';
$response = array(
'type' => '',
'message' => ''
);

if (isset($_POST['name']) || isset($_POST['rank'])) {
	$name = $_POST['name'];
	$text = $_POST['testimony'];

	if (!empty($name) && !empty($text)) {
			mysqli_query($db,"INSERT INTO `testimonies`(`id`, `name`, `comment`, `date`) VALUES (NULL,'$name','$text',NOW())");
			$response['type'] = 'success';
			$response['message'] = 'Form Submitted Successfully';
			
		
	}else{
		$response['message'] = 'Sorry, there was an error adding testimony.';
		$response['type'] = 'danger';
	}
}

echo json_encode($response);
 ?>