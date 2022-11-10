    <!-- Stylesheets -->
    <link rel="stylesheet" href="./style/Navbar.css">

    <body style="overflow-x: hidden;">

        <header>
            <div class="container-xxl">

                <div class="brand">

                    <div class="brand-container">
                        <img src="./assets/img/brand.png">
                    </div>

                </div>


                <nav id="sidebar">
                    <div class="nav-container">
                        <ul class="nav-list">

                            <li class="list-items">
                                <a href="index.php">Home</a>
                            </li>

                            <li class="list-items"><a href="About.php">About</a>
                            </li>
                            <li class="list-items">
                                <a href="Courses.php">Courses</a>
                            </li>

                            <li class="list-items">
                                <a href="Contact.php">Contact Us</a>
                            </li>
                            <li class="list-items hidden-items">
                                <a href="Login.php">Login</a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-container">
                        <button class="header-btn" id="reserve-btn">
                            <a href="Login.php">Login</a>
                        </button>
                    </div>
                </nav>

                <div class="menu-bar" onclick="openNav()">
                    <div class="bar-container" onclick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
            </div>

            </div>
        </header>

        <!-- Navbar Script -->
        <script src="./script/Navbar.js"></script>
        <!-- Script Ends -->

    </body>