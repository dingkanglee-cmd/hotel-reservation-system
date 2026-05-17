<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation System</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
            url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1600&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            height:100vh;
            color:white;
        }

        nav{
            width:100%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:20px 80px;
            background: rgba(0,0,0,0.4);
            backdrop-filter: blur(5px);
        }

        nav h1{
            font-size:32px;
            color:#ffd700;
        }

        nav ul{
            display:flex;
            list-style:none;
            gap:25px;
        }

        nav ul li a{
            text-decoration:none;
            color:white;
            font-size:18px;
            transition:0.3s;
        }

        nav ul li a:hover{
            color:#ffd700;
        }

        .hero{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            text-align:center;
            height:85vh;
            padding:20px;
        }

        .hero h2{
            font-size:65px;
            margin-bottom:20px;
        }

        .hero p{
            font-size:22px;
            max-width:700px;
            line-height:1.6;
            margin-bottom:35px;
        }

        .buttons{
            display:flex;
            gap:20px;
            flex-wrap:wrap;
        }

        .btn{
            padding:15px 35px;
            border:none;
            border-radius:30px;
            font-size:18px;
            cursor:pointer;
            transition:0.3s;
            text-decoration:none;
            font-weight:bold;
        }

        .btn-primary{
            background:#ffd700;
            color:black;
        }

        .btn-primary:hover{
            background:white;
            transform:translateY(-3px);
        }

        .btn-secondary{
            background:transparent;
            border:2px solid white;
            color:white;
        }

        .btn-secondary:hover{
            background:white;
            color:black;
            transform:translateY(-3px);
        }

        .features{
            position:absolute;
            bottom:20px;
            width:100%;
            display:flex;
            justify-content:center;
            gap:40px;
            flex-wrap:wrap;
        }

        .card{
            background:rgba(255,255,255,0.15);
            backdrop-filter: blur(8px);
            padding:20px 30px;
            border-radius:20px;
            text-align:center;
            width:220px;
        }

        .card h3{
            color:#ffd700;
            margin-bottom:10px;
        }

        @media(max-width:768px){
            nav{
                padding:20px;
                flex-direction:column;
                gap:15px;
            }

            .hero h2{
                font-size:40px;
            }

            .hero p{
                font-size:18px;
            }

            .features{
                position:relative;
                margin-top:30px;
                padding-bottom:20px;
            }
        }
    </style>
</head>
<body>

    <nav>
        <h1>LuxuryStay</h1>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>

    <section class="hero">
        <h2>Welcome To LuxuryStay Hotel</h2>

        <p>
            Experience luxury, comfort and unforgettable memories.
            Book your perfect room easily with our Hotel Reservation System.
        </p>

        <div class="buttons">
            <a href="login.php" class="btn btn-primary">Book Now</a>
            <a href="register.php" class="btn btn-secondary">Create Account</a>
        </div>
    </section>

    <div class="features">
        <div class="card">
            <h3>Luxury Rooms</h3>
            <p>Comfortable and modern rooms for every guest.</p>
        </div>

        <div class="card">
            <h3>Fast Booking</h3>
            <p>Easy and quick online room reservation system.</p>
        </div>

        <div class="card">
            <h3>24/7 Service</h3>
            <p>Friendly support anytime during your stay.</p>
        </div>
    </div>

</body>
</html>