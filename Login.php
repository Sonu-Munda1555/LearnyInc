<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/icon.svg" type="image/x-icon">

    <title>Learny Inc Login</title>

    <?php include './components/cdnLinks.php'; ?>

    <?php include './components/DatabaseConnection.php' ?>

    <!-- stylesheet -->
    <link rel="stylesheet" href="./style/LoginStyle.css">

</head>

<style>
    .err-msg {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<body>

    <div class="err-msg mt-4 text-center">
        <p class="text-center text-danger" style="background-color: #ffd3d3; width:50%;">
            <?php

            if (isset($_POST['signin'])) {

                $email =  $_POST['email'];

                $password = $_POST['password'];

                $query = "select * from learny_users where email = '$email' && password = '$password'";

                $data = mysqli_query($conn, $query);

                $data_count = mysqli_num_rows($data);

                if ($data_count == 1) {
                    $_SESSION['user_name'] = $email;
                    header('location: ./user/userDashboard.php');
                } else {
                    echo "Invalid Credentials";
                }
            }
            ?>
        </p>
    </div>

    <section id="login-wrapper">
        <div id="brand-name" class="wrapper-content">
            <div class="brand" style="width: 100%;">
                <h1 style="color:blueviolet; font-size:3.5rem;">Learny Inc.</h1>
            </div>
            <div class="brand-desc">
                <h2 style="font-weight: 400;">
                    Helps you to Empower your Skills.
                </h2>
            </div>
        </div>

        <div id="login-form" class="wrapper-content">
            <div class="title">
                <h2>
                    Login
                </h2>
            </div>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="email" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" name="password" id="password" required autocomplete="off">
                </div>

                <input type="submit" name="signin" value="Sign in" id="signin-btn">
                <p class="text-center">OR</p>
                <div class="form-group">
                    <button id="reg-btn">
                        <a href="./Signup.php">
                            Register
                        </a>
                    </button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>