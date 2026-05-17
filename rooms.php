<?php
session_start();

include "config.php";

$sql = "SELECT * FROM rooms";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>

<head>

    <title>Hotel Rooms</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
        }

        .room-card{
            box-shadow:0px 0px 10px gray;
            border-radius:10px;
            overflow:hidden;
            transition:0.3s;
        }

        .room-card:hover{
            transform:scale(1.03);
        }

        .room-img{
            height:200px;
            object-fit:cover;
        }

    </style>

</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center">

        <h1>Hotel Rooms</h1>

        <div>

            <a href="mybookings.php" class="btn btn-primary">
                My Bookings
            </a>

            <a href="logout.php" class="btn btn-danger">
                Logout
            </a>

        </div>

    </div>

    <hr>

    <?php
    if(isset($_GET['booking'])){
        echo "
        <div class='alert alert-success'>
            Booking Successful
        </div>
        ";
    }
    ?>

    <div class="row">

    <?php
    while($row = mysqli_fetch_assoc($result)){
    ?>

    <div class="col-md-4 mb-4">

        <div class="card room-card">

            <img
            src="https://images.unsplash.com/photo-1566073771259-6a8506099945"
            class="card-img-top room-img">

            <div class="card-body">

                <h3>
                    <?php echo $row['room_type']; ?>
                </h3>

                <p>
                    Price:
                    RM <?php echo $row['price']; ?>
                </p>

                <p>
                    Capacity:
                    <?php echo $row['capacity']; ?> Person
                </p>

                <p>
                    Status:
                    <?php echo $row['availability']; ?>
                </p>

                <a
                href="booking.php?room_id=<?php echo $row['room_id']; ?>"
                class="btn btn-success">

                    Book Now

                </a>

            </div>

        </div>

    </div>

    <?php
    }
    ?>

    </div>

</div>

</body>
</html>