<?php
include 'config.php';

$userid = $_GET['id'];

$sql = "DELETE FROM category WHERE category_id = {$userid}";

if (mysqli_query($conn, $sql)) {
    header("Location: {$hostname}/admin/category.php");
} else {
    echo "<p style='color:red;text-align:center;margin:10px 0px;'>Can't Delete the Category Record</p>";
}

mysqli_close($conn); // Close the database connection
?>
