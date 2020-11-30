<?php 
require_once '../connection.php';
require_once('php_image_magician.php');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$uploadDir ='../assets/';
$serviceDir ='../assets/img/services/';
$response = array(
'type' => '',
'message' => ''
);

if (isset($_POST['name']) || isset($_POST['description'])) {
	$name = $_POST['name'];
	$description = htmlspecialchars($_POST['description']);
	$service_id = $_POST['service_id'];
	$rows = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM services WHERE service_id ='$service_id'"));
	$caption = $rows['caption'];

	//print_r($rows);
	if (!empty($name) && !empty($description)) {
		$uploadStatus = 1;

		$uploadFile = '';

		if (!empty($_FILES['file']['name'])) {
			$fileName = basename($_FILES['file']['name']);
			$targetFilePath = $uploadDir . $fileName;
			$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

			$allowTypes = array('jpg', 'png', 'jpeg');

			if (in_array($fileType, $allowTypes)) {
					unlink($serviceDir.$caption);
				if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
					$magicianObj = new imageLib($targetFilePath);
					$magicianObj -> resizeImage(600, 400);
						$magicianObj -> saveImage($serviceDir.time().'.'.$fileType, 100);
						unlink($targetFilePath);
					$uploadFile = time().'.'.$fileType;
					mysqli_query($db,"UPDATE `services` SET `title` = '$name', `caption` = '$uploadFile', `body` = '$description' WHERE `service_id` = '$service_id'");
					$response['type'] = 'success';
					$response['message'] = 'Form Submitted Successfully';
				}else{
					$uploadStatus = 0;

					$response['message'] = 'Sorry, there was an error uploading your file.';
					$response['type'] = 'danger';

				}
			}else{
				$uploadStatus = 0;

				$response['message'] = 'Sorry Wrong File Format.';
				$response['type'] = 'danger';
			}
		}else{
			mysqli_query($db,"UPDATE `services` SET `title` = '$name', `body` = '$description' WHERE `service_id` = '$service_id'");
			$response['type'] = 'success';
			$response['message'] = 'Form Submitted Successfully';
		}
	}
}

echo json_encode($response);
 ?>