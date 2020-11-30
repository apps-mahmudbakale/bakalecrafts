<?php 
function resizeImage($inputFileName,$destFolder,$perc,$quality=80) {
       $imageSizeType = getimagesize($_FILES[$inputFileName]['tmp_name']);
       $width = $imageSizeType[0];
       $height = $imageSizeType[1];
       $type = $imageSizeType['mime'];

       switch($type) {
        case "image/png":
           $image = imagecreatefrompng($_FILES[$inputFileName]['tmp_name']);
           break;
        case "image/jpeg": case "image/pjpeg": 
           $image = imagecreatefromjpeg($_FILES[$inputFileName]['tmp_name']);
           break;
          case "image/gif":
             $image = imagecreatefromgif($_FILES[$inputFileName]['tmp_name']);
             break;
       }
      
       $fileInfo = pathinfo($_FILES[$inputFileName]['name']);
       $extension = strtolower($fileInfo["extension"]);
       $newName = rand(0,99999999999).".".$extension;

       $new_width = $width * $perc;
       $new_height = $height * $perc;
       $new_canvas = imagecreatetruecolor($new_width, $new_height);

     //$image = imagecreatefromjpeg($_FILES[$image]['tmp_name']);
     imagecopyresampled($new_canvas, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

    switch($type) {
        case 'image/png': 
        imagepng($new_canvas, $destFolder.$newName);
        break;
          case 'image/gif': 
        imagegif($new_canvas, $destFolder.$newName); 
        break;          
          case 'image/jpeg': case 'image/pjpeg': 
        imagejpeg($new_canvas, $destFolder.$newName, $quality); 
          //default: return false;
      }

    return $newName;
}


 ?>