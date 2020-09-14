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
	$rank = $_POST['rank'];
	$twitter = $_POST['twitter'];
	$facebook = $_POST['facebook'];
	$instagram = $_POST['instagram'];
	$linkedn = $_POST['linkedn'];
	$phone = $_POST['phone'];
	$team_id = $_POST['team_id'];

	if (!empty($name) && !empty($rank)) {
		$uploadStatus = 1;

		$uploadFile = '';

		if (!empty($_FILES['file']['name'])) {
			$fileName = basename($_FILES['file']['name']);
			$targetFilePath = $uploadDir . $fileName;
			$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

			$allowTypes = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');

			if (in_array($fileType, $allowTypes)) {
				
				if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
					$uploadFile = $fileName;
					mysqli_query($db,"UPDATE `team` SET `name` = '$name', `rank` = '$rank', `phone` = '$phone', `twitter` = '$twitter', `facebook` ='$facebook', `instagram` = '$instagram', `linkedn` = '$linkedn', `picture` = '$uploadFile' WHERE `id` = '$team_id'");
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
			mysqli_query($db,"UPDATE `team` SET `name` = '$name', `rank` = '$rank', `phone` = '$phone', `twitter` = '$twitter', `facebook` ='$facebook', `instagram` = '$instagram', `linkedn` = '$linkedn' WHERE `id` = '$team_id'");
			$response['type'] = 'success';
			$response['message'] = 'Form Submitted Successfully';
		}
	}
}

echo json_encode($response);
 ?>