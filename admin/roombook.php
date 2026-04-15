<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:../index.php");
}
include("../config/db.php");

$id = $_GET['rid'] ?? null;
if (!$id) {
    header("location:home.php");
}

$result = mysqli_query($con, "SELECT * FROM roombook WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Room Booking Confirmation</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h2>Booking Details</h2>

    <table class="table table-bordered">
        <tr><th>Name</th><td><?= $row['FName']." ".$row['LName']; ?></td></tr>
        <tr><th>Email</th><td><?= $row['Email']; ?></td></tr>
        <tr><th>Room Type</th><td><?= $row['TRoom']; ?></td></tr>
        <tr><th>Check-In</th><td><?= $row['cin']; ?></td></tr>
        <tr><th>Check-Out</th><td><?= $row['cout']; ?></td></tr>
        <tr><th>Status</th><td><?= $row['stat']; ?></td></tr>
    </table>

    <form method="post">
        <select name="status" class="form-control">
            <option value="Confirm">Confirm</option>
        </select><br>
        <button name="update" class="btn btn-success">Update Status</button>
    </form>

<?php
if (isset($_POST['update'])) {
    mysqli_query($con, "UPDATE roombook SET stat='Confirm' WHERE id='$id'");
    echo "<p class='alert alert-success'>Booking Confirmed</p>";
}
?>
</div>
</body>
</html>