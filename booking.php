<?php
session_start();

include "config.php";

if(!isset($_SESSION['email'])){
    die("Please login first");
}

$room_id = $_GET['room_id'];

$email = $_SESSION['email'];

$user_query = "SELECT * FROM users WHERE email='$email'";
$user_result = mysqli_query($conn,$user_query);

$user = mysqli_fetch_assoc($user_result);

$user_id = $user['user_id'];

if(isset($_POST['book'])){

    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    $booking_sql = "INSERT INTO bookings
    (user_id,room_id,check_in,check_out,total_price,status)

    VALUES

    ('$user_id','$room_id',
    '$check_in','$check_out',
    '200','Confirmed')";

    if(mysqli_query($conn,$booking_sql)){

        header("Location: rooms.php?booking=success");

    }else{

        echo "Booking Failed";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking</title>
</head>
<body>

<h2>Room Booking</h2>

<form method="POST">

    <label>Check In Date</label><br>
    <input type="date" name="check_in"><br><br>

    <label>Check Out Date</label><br>
    <input type="date" name="check_out"><br><br>

    <button type="submit" name="book">
        Confirm Booking
    </button>

</form>

</body>
</html>