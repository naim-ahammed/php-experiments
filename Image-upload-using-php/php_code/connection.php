<!-- connection.php -->
<!-- http://localhost/php-experiments/Image-upload-using-php/php_code/connection.php -->

<?php
$host = "localhost";
$username = "root"; // Your DB username
$password = ""; // Your DB password
$database = "file_upload_db";

// Create connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
