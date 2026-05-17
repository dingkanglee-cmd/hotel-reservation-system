<?php
session_start();

include "config.php";

if(!isset($_SESSION['email'])){
    die("Please login first");
}

$email = $_SESSION['email'];

$user_query = "SELECT * FROM users WHERE email='$email'";
$user_result = mysqli_query($conn,$user_query);

$user = mysqli_fetch_assoc($user_result);

$user_id = $user['user_id'];

$sql = "SELECT * FROM bookings
        WHERE user_id='$user_id'";

$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>

<head>

    <title>My Bookings</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
        }

        .booking-box{
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0px 0px 10px gray;
        }

    </style>

</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center">

        <h1>My Bookings</h1>

        <a href="rooms.php" class="btn btn-primary">
            Back to Rooms
        </a>

    </div>

    <hr>

    <div class="booking-box">

        <table class="table table-bordered table-hover">

            <thead class="table-dark">

                <tr>

                    <th>Booking ID</th>
                    <th>Room ID</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>

            </thead>

            <tbody>

            <?php
            while($row = mysqli_fetch_assoc($result)){
            ?>

            <tr>

                <td>
                    <?php echo $row['booking_id']; ?>
                </td>

                <td>
                    <?php echo $row['room_id']; ?>
                </td>

                <td>
                    <?php echo $row['check_in']; ?>
                </td>

                <td>
                    <?php echo $row['check_out']; ?>
                </td>

                <td>

                    <span class="badge bg-success">

                        <?php echo $row['status']; ?>

                    </span>

                </td>

                <td>

                    <a
                    href="cancel_booking.php?id=<?php echo $row['booking_id']; ?>"
                    class="btn btn-danger btn-sm">

                        Cancel

                    </a>

                </td>

            </tr>

            <?php
            }
            ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>