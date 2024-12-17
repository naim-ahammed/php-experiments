//read.php
//http://localhost/php-experiments/php-datebase-connection-code/php_code/read.php

<?php
include 'db.php';

$sql = "SELECT id, name, email, reg_date FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Registered on: " . $row["reg_date"]. "<br>";
    }
} else {
    echo "0 results found.";
}

$conn->close();
?>
