<!-- file_upload.php -->
<!-- http://localhost/php-experiments/Image-upload-using-php/php_code/file_upload.php -->

<?php
require_once './connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload Student Details</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label>Student Name:</label>
            <input type="text" name="st_name" required /> <br><br>
            <label>Student Dept.:</label>
            <input type="text" name="st_dept" required /> <br><br>
            <label>File Upload:</label>
            <input type="file" name="image" required /> <br><br>
            <input type="submit" name="submit" value="Upload" />
        </div>
    </form>

    <h2>Uploaded Students</h2>
    <table border="1" width="70%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Student Dept.</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT id, st_name, st_dept, image FROM student";
            if ($result = $mysqli->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . htmlspecialchars($row['st_name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['st_dept']) . "</td>";
                    echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' alt='Student Image' width='100' height='100'></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
