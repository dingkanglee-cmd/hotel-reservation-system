<?php
session_start();

include "config.php";

if(!isset($_SESSION['email'])){
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Required</title>

    <style>
        body{
            margin:0;
            padding:0;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#141e30,#243b55);
            font-family:Arial;
        }

        .box{
            background:white;
            padding:50px;
            border-radius:20px;
            text-align:center;
            width:400px;
            box-shadow:0 10px 30px rgba(0,0,0,0.3);
        }

        .box h1{
            color:#e63946;
            margin-bottom:15px;
        }

        .box p{
            color:#555;
            font-size:18px;
            margin-bottom:30px;
        }

        .btn{
            display:inline-block;
            padding:14px 30px;
            background:#ffd700;
            color:black;
            text-decoration:none;
            border-radius:30px;
            font-weight:bold;
            transition:0.3s;
        }

        .btn:hover{
            background:black;
            color:white;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Login Required</h1>

    <p>
        Please login first before booking a room.
    </p>

    <a href="login.php" class="btn">Go To Login</a>
</div>

</body>
</html>

<?php
exit();
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