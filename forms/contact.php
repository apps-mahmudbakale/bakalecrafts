<?php
include '../connection.php';
 if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (mysqli_query($db,"INSERT INTO `messages`(`id`, `name`, `email`, `subject`, `body`, `date`) VALUES (NULL,'$name','$email','$subject','$message',NOW())")) {
      echo "OK";
    }
 }

?>
