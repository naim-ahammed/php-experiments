//update.php
//http://localhost/php-experiments/php-datebase-connection-code/php_code/update.php

<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>

<!-- HTML Form to update data -->
<form method="post" action="">
    User ID: <input type="text" name="id" required><br>
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" value="Update User">
</form>
