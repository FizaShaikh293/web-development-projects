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
    <title>Profit</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h2>Total Profit</h2>

<?php
$res = mysqli_query($con, "SELECT SUM(amount) AS total FROM payment");
$data = mysqli_fetch_assoc($res);
?>
    <h3>₹ <?= $data['total'] ?? 0; ?></h3>
</div>
</body>
</html>