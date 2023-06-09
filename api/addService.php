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

	if (!empty($name) && !empty($description)) {
		$uploadStatus = 1;

		$uploadFile = '';

		if (!empty($_FILES['file']['name'])) {
			$fileName = basename($_FILES['file']['name']);
			$targetFilePath = $uploadDir . $fileName;
			$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

			$allowTypes = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');

			if (in_array($fileType, $allowTypes)) {
				
				if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
					$magicianObj = new imageLib($targetFilePath);
					$magicianObj -> resizeImage(600, 400);
						$magicianObj -> saveImage($serviceDir.time().'.'.$fileType, 100);
						unlink($targetFilePath);
					$uploadFile = time().'.'.$fileType;
					mysqli_query($db,"INSERT INTO `services`(`service_id`, `title`, `caption`, `body`) VALUES (NULL,'$name','$uploadFile','$description')");
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
		}
	}
}

echo json_encode($response);
 ?>