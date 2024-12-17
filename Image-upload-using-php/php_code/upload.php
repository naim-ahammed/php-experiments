<!-- upload.php -->
<!-- http://localhost/php-experiments/Image-upload-using-php/php_code/upload.php -->

<?php
session_start();
require_once './connection.php';

$statusMsg = '';

// If file upload form is submitted
if (isset($_POST["submit"])) {
    $status = 'error';
    if (!empty($_FILES["image"]["name"])) {
        // Get file info
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $name = $mysqli->real_escape_string($_POST["st_name"]);
            $dept = $mysqli->real_escape_string($_POST["st_dept"]);

            // Insert image content into database
            $sql = "INSERT INTO `student` (`st_name`, `st_dept`, `image`) VALUES ('$name', '$dept', '$imgContent')";
            $insert = $mysqli->query($sql);

            if ($insert) {
                $status = 'success';
                header('Location: ./file_upload.php');
                exit;
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select an image file to upload.';
    }
}

// Display status message
echo $statusMsg;
?>
