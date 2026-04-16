<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:../index.php");
}
include("../config/db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h1>Admin Dashboard</h1>

    <?php
    $result = mysqli_query($con, "SELECT * FROM roombook");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>{$row['FName']} - {$row['TRoom']} - {$row['stat']}</p>";
    }
    ?>
</div>
</body>
</html>