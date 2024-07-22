<?php
//$fileToUpload = $_GET["fileToUpo"]
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOK = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// check if the image file is a actual image of fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image -" .$check["mime"] . ".";
        $uploadOK = 1;
    } else {
        echo "File is not an image.";
        $uploadOK = 0;
    }
}
//checkif file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOK = 0;
    # code...
}
//check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOK = 0;
}
// Allow certain file formats
if ($imageFileType !="jpg" && $imageFileType!="png" && $imageFileType != "jpeg" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG, and GIF files are permitted.";
    $uploadOK = 0;
}
//check if upload is okay
if($uploadOK == 0) {
    echo "Sorry, your file was not uploaded.";
    //if everything is okay, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
    }else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>