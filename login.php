<?php
session_start();

include "config.php";

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
            WHERE email='$email'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){

        $_SESSION['email'] = $email;

        header("Location: rooms.php");

    }else{

        $error = "Invalid Email or Password";

    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
        }

        .login-box{
            width:400px;
            margin:auto;
            margin-top:100px;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0px 0px 10px gray;
        }

    </style>

</head>

<body>

<div class="login-box">

    <h2 class="text-center mb-4">
        Hotel Login
    </h2>

    <?php
    if(isset($error)){
        echo "<div class='alert alert-danger'>$error</div>";
    }
    ?>

    <form method="POST">

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

        <button
        type="submit"
        name="login"
        class="btn btn-primary w-100">

            Login

        </button>

    </form>

    <br>

    <p class="text-center">

        Don't have an account?

        <a href="register.php">
            Register
        </a>

    </p>

</div>

</body>
</html>