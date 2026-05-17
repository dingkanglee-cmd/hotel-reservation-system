<?php
include "config.php";

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users(username,email,password,phone)
            VALUES('$username','$email','$password','$phone')";

    if(mysqli_query($conn,$sql)){

        header("Location: login.php");

    }else{

        $error = "Register Failed";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
        }

        .register-box{
            width:450px;
            margin:auto;
            margin-top:60px;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0px 0px 10px gray;
        }

    </style>

</head>

<body>

<div class="register-box">

    <h2 class="text-center mb-4">
        Hotel Register
    </h2>

    <?php
    if(isset($error)){
        echo "<div class='alert alert-danger'>$error</div>";
    }
    ?>

    <form method="POST">

        <div class="mb-3">

            <label>Username</label>

            <input
            type="text"
            name="username"
            class="form-control"
            required>

        </div>

        <div class="mb-3">

            <label>Email</label>

            <input
            type="email"
            name="email"
            class="form-control"
            required>

        </div>

        <div class="mb-3">

            <label>Password</label>

            <input
            type="password"
            name="password"
            class="form-control"
            required>

        </div>

        <div class="mb-3">

            <label>Phone</label>

            <input
            type="text"
            name="phone"
            class="form-control"
            required>

        </div>

        <button
        type="submit"
        name="register"
        class="btn btn-success w-100">

            Register

        </button>

    </form>

    <br>

    <p class="text-center">

        Already have account?

        <a href="login.php">
            Login
        </a>

    </p>

</div>

</body>
</html>