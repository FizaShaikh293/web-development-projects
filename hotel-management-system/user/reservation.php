<?php
include("../config/db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Room Reservation</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h2>Room Reservation</h2>

    <form method="POST">
        <input type="text" name="fname" placeholder="First Name" class="form-control" required><br>
        <input type="text" name="lname" placeholder="Last Name" class="form-control" required><br>
        <input type="email" name="email" placeholder="Email" class="form-control" required><br>

        <select name="troom" class="form-control" required>
            <option value="">Select Room Type</option>
            <option>Superior Room</option>
            <option>Deluxe Room</option>
            <option>Guest House</option>
            <option>Single Room</option>
        </select><br>

        <input type="date" name="cin" class="form-control" required><br>
        <input type="date" name="cout" class="form-control" required><br>

        <button name="submit" class="btn btn-success">Book Room</button>
    </form>

<?php
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO roombook(FName, LName, Email, TRoom, cin, cout, stat)
            VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[email]',
                    '$_POST[troom]', '$_POST[cin]', '$_POST[cout]', 'Not Confirm')";

    if (mysqli_query($con, $sql)) {
        echo "<p class='alert alert-success'>Booking Request Submitted</p>";
    } else {
        echo "<p class='alert alert-danger'>Error</p>";
    }
}
?>
</div>
</body>
</html>