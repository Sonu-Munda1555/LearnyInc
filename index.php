<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.svg" type="image/x-icon">
    <title>Learny Inc</title>
   
    <?php include 'cdnLinks.php'; ?>
    <link rel="stylesheet" href="./style/Style.css">

</head>

<body>

    <!-- Header/Navbar -->
    <?php include './components/Navbar.php' ?>
    <!-- Header/Navbar -->

    <!-- Main Intro -->
    <section id="intro">
        <div class="container">
            <h4 class="text-white text-uppercase"> Community Learny Inc.</h4>
            <h1 class="text-white text-uppercase my-4" style="font-size: 4rem;">Empower Your Skills</h1>
            <button id="reg-btn">
                <a href="./Signup.php" class="d-block" style="z-index: -1;"  onclick="openSignup()">
                    Register Now
                </a>
            </button>
        </div>
    </section>
    <hr>
    <section id="programs">
        <div class="container d-flex flex-column align-items-center justify-content-center w-full my-5">
            <div class="container d-flex flex-column align-items-center justify-content-center w-50">

                <h1 class="display-5" style="margin-top: 8rem;">Programs</h1>

                <p class="mt-4 text-center"> Here, you will find various types of courses which you can access free of
                    Cost by just login to our websites</p>
            </div>
            <div class="row my-3 text-center" style="width: 100%;">
                <div class="col mx-3 border fw-light w-auto py-5 bg-primary text-white h5">Web development</div>
                <div class="col mx-3 border fw-light w-auto py-5 bg-primary text-white h5">Mobile Development</div>
                <div class="col mx-3 border fw-light w-auto py-5 bg-primary text-white h5">
                    Microsoft Office
                </div>
                <div class="col mx-3 border fw-light w-auto py-5 bg-primary text-white h5">Programming</div>
            </div>
            <div class="row my-3 text-center" style="width: 100%;">
                <div class="col mx-3 border fw-light w-auto py-5 bg-primary text-white h5">Data Structures</div>
                <div class="col mx-3 border fw-light w-auto py-5 bg-primary text-white h5">
                    Data Science
                </div>
                <div class="col mx-3 border fw-light w-auto py-5 bg-primary text-white h5">Database management</div>
                <div class="col mx-3 border fw-light w-auto py-5 bg-primary text-white h5">Software Development</div>
            </div>
        </div>
        <hr>
        <div class="container" style="background-color: rgb(223, 223, 223);">
            <div class="inner-row" id="about-row">
                <div class="py-5 cards" id="card-1">
                    <h2 class="fw-light py-5 text-center">A Few Words About Us</h2>
                    <p class="px-5 pb-5">
                        The main goal of our is to provide various courses as free you can access all the materials free
                        of cost you just need to sign up. We only help you to learn various this and improving your
                        skills.
                    </p>
                    <button class="btn btn-lg w-50 text-uppercase mx-auto py-2 mb-4 text-white fw-normal" style="background-color: orangered;">
                        Read More
                    </button>
                </div>


                <div class="p-5 cards" id="card-2">
                    <img src="./assets/img/brand.png" alt="learny" class="rounded mx-auto py-4" style="width: 100%;" ;>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="featured-courses" class="py-5">
        <div class="container-fluid">
            <div class="container">
                <h1 class="text-center fw-light py-5">Our Featured Courses</h1>
                <div class="rows">
                    <div class="inner-row">
                        <div class="cols">
                            <img src="./assets/img/html5.png" alt="HTML5">
                            <h2 class="text-center">HTML5</h2>
                        </div>
                        <div class="cols">
                            <img src="./assets/img/css.png" alt="CSS3">
                            <h2 class="text-center">CSS3</h2>
                        </div>
                        <div class="cols">
                            <img src="./assets/img/javascript.png" alt="JS">
                            <h2 class="text-center">JavaScript</h2>
                        </div>
                    </div>
                </div>
                <div class="rows">
                    <div class="inner-row">
                        <div class="cols">
                            <img src="./assets/img/PHP.png" alt="PHP">
                            <h2 class="text-center">PHP</h2>
                        </div>
                        <div class="cols">
                            <img src="./assets/img/reactjs.png" alt="React JS">
                            <h2 class="text-center">React JS</h2>
                        </div>
                        <div class="cols">
                            <img src="./assets/img/mongodb.png" alt="mongoDB">
                            <h2 class="text-center">MongoDB</h2>
                        </div>
                    </div>
                </div>
                <div class="rows">
                    <div class="inner-row">
                        <div class="cols">
                            <img src="./assets/img/java.png" alt="Java">
                            <h2 class="text-center">Java</h2>
                        </div>
                        <div class="cols">
                            <img src="./assets/img/python.png" alt="Python">
                            <h2 class="text-center">Python</h2>
                        </div>
                        <div class="cols">
                            <img src="./assets/img/c++.png" alt="C++">
                            <h2 class="text-center">C++</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
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
    <hr>


    <!-- Footer -->
    <?php include './components/Footer.php' ?>
    <!-- Footer -->

</body>

</html>