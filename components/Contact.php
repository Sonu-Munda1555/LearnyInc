<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.svg" type="image/x-icon">
    <title>Learny Inc</title>
    <?php include './cdnLinks.php'; ?>

    <!-- stylesheet -->
    <link rel="stylesheet" href="./style/Contact.css">

    <?php include './components/DatabaseConnection.php'; ?>

</head>

<body>
    <?php include './components/Navbar.php'; ?>

    <!-- Main Intro -->
    <section id="intro">
        <div class="container">
            <h1 class="text-uppercase text-white text-center" style="font-size: 4rem;   text-shadow: 1px 1px 10px rgba(0,0,0, 0.4);">
                Get In Touch
            </h1>
        </div>
    </section>
    <!-- Main Intro -->

    <hr>

    <!-- Contact Info -->
    <section id="contact-info">
        <div class="container-xl">
            <div id="info-title">
                <h1>
                    Contact Info
                </h1>
            </div>
            <div class="py-4" id="cinfo-row">
                <div class="cinfo-cols">
                    <img src="./assets/img/contact-us-png-transparent.png" style="width: 365px;">
                </div>
                <div class="cinfo-cols" id="info-col-2">
                    <div class=" col-items email">
                        <span class="material-symbols-outlined">
                            mail
                        </span>
                        <span>learnyinc@email.com</span>
                    </div>
                    <div class=" col-items phone">
                        <span class="material-symbols-outlined">
                            call
                        </span>
                        <span>+91 8080-9090</span>
                    </div>
                    <div class=" col-items care">
                        <span class="material-symbols-outlined">
                            support_agent
                        </span>
                        <span>learnyinc@care</span>
                    </div>
                    <div class=" col-items office">
                        <span class="material-symbols-outlined">
                            apartment
                        </span>
                        <span>
                            Bengaluru, Karnataka, India
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Info -->

    <hr>

    <?php

    if (isset($_POST['submit'])) {

        // name	phone	email	message

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];


        $insertQ = "Insert into people_messages (name, phone, email, message) values('$name', '$phone', '$email', '$message')";

        $data = mysqli_query($conn, $insertQ);

        if (!$data) {
            echo "<script> alert('Message not sent'); </script>";
        } else {
            echo "<script> alert('Message Sent'); </script>";
        }
    }
    ?>

    <!-- Message -->
    <section id="msg">
        <div class="container-xl py-4">
            <div id="form-title">
                <h1 class="text-center py-3" style="color:white">
                    Send a Message
                </h1>
            </div>
            <div id="msg-row">
                <div class="msg-cols">
                    <img src="./assets/img/send us a message.png">
                </div>

                <div class="msg-cols">
                    <div class="form-container">
                        <form action="" method="POST" class="py-3">
                            <div class="form-controls">
                                <label for="Name">Name</label>
                                <input type="text" name="name" id="name" autocomplete="off" required>
                            </div>
                            <div class="form-controls">
                                <label for="Phone">Phone</label>
                                <input type="text" name="phone" id="phone" autocomplete="off" required>
                            </div>
                            <div class="form-controls">
                                <label for="Email">Email</label>
                                <input type="email" name="email" id="email" autocomplete="off" required>
                            </div>
                            <div class="form-controls">
                                <label for="Message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="4" required></textarea>
                            </div>
                            <div class="form-controls">
                                <input type="submit" name="submit" value="Send" id="submit-btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include './components/Footer.php'; ?>
</body>

</html>