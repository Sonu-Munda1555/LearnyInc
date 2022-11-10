<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.svg" type="image/x-icon">
    <title>Learny Inc</title>

    <?php include './cdnLinks.php'; ?>

</head>

<style>

    #form-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 75px;
        width: 100%;
        background-color: #6cfff59e;
        color: white;
    }

    #signup {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 412px;
        border-radius: 14px;
        margin: 4rem 0;
        background-color: blueviolet;
        box-shadow: 0px 0px 8px black;
    }

    form {
        padding: 10px;
        width: 86%;
    }

    .form-group {
        margin: 14px 0;
    }

    .form-group input {
        border: none;
        outline: none;
        border-bottom: 2px solid white;
        background-color: transparent;
        width: 100%;
        color: white;
        padding: 8px;
    }

    ::placeholder{
        color: white;
    }


    #submit-btn {
        border: 2px solid white;
        text-transform: uppercase;
        border-radius: 8px;
    }

    #submit-btn:hover {
      box-shadow: 0px 0px 10px white;
    }

    .form-group a:hover {
        text-decoration: underline;
    }
</style>

<body>

    <?php include './components/Navbar.php'; ?>

    <?php include './components/DatabaseConnection.php'; ?>

    <?php
    if (isset($_POST['register'])) {

        $name = $_POST['name'];
        $age = $_POST['age'];
        $degree = $_POST['degree'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        $insertQ = "Insert into learny_users (name, age, degree, email, password) values('$name', '$age', '$degree', '$email', '$password')";

        $data = mysqli_query($conn, $insertQ);

        if(!$data){
            echo "<script> alert('Registration Failed'); </script>";
        }
        else{
            echo "<script> alert('Registration Successfully'); </script>";
        }

    }
    ?>
    <section id="form-wrapper">
        <div id="signup">
            <div class="form-head">
                <h3 class="py-4" style="color:white;">
                    Sign-up
                </h3>
            </div>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" name="name" id="name" placeholder="Enter your name" required autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="age" id="age" placeholder="Enter your age" required autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="degree" id="degree" placeholder="Degree" required autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Enter your e-mail" required autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Enter password" required autocomplete="off">
                </div>

                <div class="form-group">
                    <p class="text-center"> <a href="./Login.php" style="color: white;"> Already have an account?</a></p>
                </div>
                <div class="form-group">
                    <input type="submit" name="register" id="submit-btn" value="register">
                </div>
            </form>
        </div>
    </section>

    <?php include './components/Footer.php'; ?>
</body>

</html>