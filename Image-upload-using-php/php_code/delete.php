//delete.php
//http://localhost/php-experiments/php-datebase-connection-code/php_code/delete.php

<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>

<!-- Link to delete data -->
<a href="delete.php?id=1">Delete User with ID 1</a>
