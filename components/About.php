<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.svg" type="image/x-icon">
    <title>Learny Inc</title>
    <?php include './cdnLinks.php'; ?>
    <link rel="stylesheet" href="./style/About.css">
</head>

<body>

    <?php include './components/Navbar.php' ?>

    <!-- Main Intro -->
    <section id="intro">
        <div class="container">
            <h1 class="text-center">Our mission is to provide a free, world‑class education for anyone, anywhere.</h1>
        </div>
    </section>
    <!-- Main Intro -->

    <hr>

    <!-- Rows -->
    <div class="row p-5" style="background-color: white; cursor:default ">
        <div class="row-title">
            <h1 class="text-center py-4 mt-3">Improving lives through learning</h1>
        </div>
        <div class="row-p pb-3">
            <p class="text-center">
                Whether you want to learn or to share what you know, you’ve come to the right place. As a global destination for online learning, we connect people through knowledge.
            </p>
        </div>
    </div>

    <div class="row py-5" style="background-color: blueviolet; cursor:default">
        <h3 class="text-center text-white p-4">
            A growing body of research indicates the impact that Learny Inc. personalized mastery learning has on driving learning outcomes.
        </h3>
    </div>
    <!-- Rows -->

    <hr>

    <!-- Section Team -->
    <section id="team">
        <div class="container-fluid py-4">
            <div class="team-title py-5 mt-4">
                <h1 class="text-uppercase text-center">
                    Our Team
                </h1>
            </div>

            <div class="team-row" id="team-row">
                <div class="team-cols">
                    <div class="profile-img">
                        <img src="./assets/img/Team_M3.jpg" alt="Ajay Singhla">
                    </div>
                    <div class="member-name">
                        <h3 class="text-uppercase text-center">Ajay Singhla</h3>
                    </div>
                    <div class="member-post">
                        <p class="text-uppercase text-center">
                            Founder
                        </p>
                    </div>
                </div>
                <div class="team-cols">
                    <div class="profile-img">
                        <img src="./assets/img/Team_M1.jpg" alt="Vinay Kumar">
                    </div>
                    <div class="member-name">
                        <h3 class="text-uppercase text-center">Vinay Kumar</h3>
                    </div>
                    <div class="member-post">
                        <p class="text-uppercase text-center">
                            CO-Founder
                        </p>
                    </div>
                </div>
                <div class="team-cols">
                    <div class="profile-img">
                        <img src="./assets/img/Team_M2.jpg" alt="Ireneus Alasabom">
                    </div>
                    <div class="member-name">
                        <h3 class="text-uppercase text-center">Ireneus Alasabom</h3>
                    </div>
                    <div class="member-post">
                        <p class="text-uppercase text-center">
                            Web-Manager
                        </p>
                    </div>
                </div>
                <div class="team-cols">
                    <div class="profile-img">
                        <img src="./assets/img/Team_M4.jpg" alt="Abhishek Mhajan">
                    </div>
                    <div class="member-name">
                        <h3 class="text-uppercase text-center">Abhishek Mhajan</h3>
                    </div>
                    <div class="member-post">
                        <p class="text-uppercase text-center">
                            Database Manager
                        </p>
                    </div>
                </div>
                <div class="team-cols">
                    <div class="profile-img">
                        <img src="./assets/img/Code-With-Harry.jpg" alt="Code With Harry">
                    </div>
                    <div class="member-name">
                        <h3 class="text-uppercase text-center">Code With Harry</h3>
                    </div>
                    <div class="member-post">
                        <p class="text-uppercase text-center">
                            Youtuber
                        </p>
                    </div>
                </div>
                <div class="team-cols">
                    <div class="profile-img">
                        <img src="./assets/img/Thapa Tech.jpg" alt="Thapa Technical">
                    </div>
                    <div class="member-name">
                        <h3 class="text-uppercase text-center">Thapa Technical</h3>
                    </div>
                    <div class="member-post">
                        <p class="text-uppercase text-center">
                            Youtuber
                        </p>
                    </div>
                </div>
                <div class="team-cols">
                    <div class="profile-img">
                        <img src="./assets/img/Love Babbar.jpg" alt="Love Babbar">
                    </div>
                    <div class="member-name">
                        <h3 class="text-uppercase text-center">Love Babbar</h3>
                    </div>
                    <div class="member-post">
                        <p class="text-uppercase text-center">
                            Youtuber
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Team -->

    <hr>

    <!-- Supporters -->
    <section class="text-center" id="supporters">
        <div class="title">
            <h2 class="pt-5 pb-3">Trusted by the best</h2>
        </div>
        <p>Leading companies use the same courses to help employees keep their skills fresh.</p>

        <div id="sptrs">
            <div class="container-xl">
                <img src="./assets/img/wipro.png" alt="Wipro">
                <img src="./assets/img/Tech_Mahindra.png" alt="Tech Mhindra">
                <img src="./assets/img/infosys.png" alt="Infosys">
                <img src="./assets/img/HCL-Logo.png" alt="HCL">
                <img src="./assets/img/flipkart-logo.png" alt="Flipkart">
            </div>
        </div>
    </section>
    <!-- Supportes -->

    <?php include './components/Footer.php'; ?>
</body>

</html>