<?php 
require_once '../connection.php';
require_once('php_image_magician.php');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$uploadDir ='../assets/';
$workDir ='../assets/img/portfolio/';
$response = array(
'type' => '',
'message' => ''
);

if (isset($_POST['name'])) {
	$name = $_POST['name'];
	if (!empty($name)) {
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
					$magicianObj -> resizeImage(800, 600);
						$magicianObj -> saveImage($workDir.time().'.'.$fileType, 100);
						unlink($targetFilePath);
					$uploadFile = time().'.'.$fileType;
					mysqli_query($db,"INSERT INTO `gallery`(`id`, `name`, `image`) VALUES (NULL,'$name','$uploadFile')");
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