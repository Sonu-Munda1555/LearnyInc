<?php
session_start();
$userProfile = $_SESSION['user_name'];
if ($userProfile == true) {
} else {
    header('location:../Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icon.svg" type="image/x-icon">
    <title>Leany Inc</title>

    <?php include '../components/cdnLinks.php'; ?>

    <!-- FontAwsome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./style/style.css">
</head>

<body style="overflow-x: hidden;">
    <header>
        <div class="header-container">
            <div class="brand">
                <img src="../assets/img/brand.png" alt="Leany Inc" style="height: 74px;">
            </div>

            <div class="user" id="user" onclick="openMenu()">
                <div class="user-img">
                    <img src="../assets/img/user-icon.png" alt="user" style="height: 48px;">
                </div>
                <div class="user-name">
                    <h3>
                        <?php echo $userProfile ?>
                        <i class="fa fa-angle-down" style="padding:8px 0;"></i>
                    </h3>
                </div>
            </div>

        </div>
    </header>

    <div class="user-dashboard" id="usr-dashboard" style=" right: -140px;">
        <div class="dashboard-container">
            <button class="logout-btn" value="logout" name="logout"><a href="./logout.php" style="text-transform: none; color:black">Log out</a></button>
        </div>
    </div>

    <section id="welcome">
        <div class="container">
            <h1 style="color: white;">
                Welcome <?php echo $userProfile ?>
            </h1>
        </div>
    </section>

    <section id="courses">
        <div class="courses-container">
            <h2 class="text-center pt-5 pb-3" style="color: blueviolet;">Explore Courses</h2>

            <!-- WEB DEVELOPER COURSE -->
            <h3 class="px-4 py-2">Web Development</h3>
            <div class="courses-rows p-2" id="webdev">
                <div class="cols">
                    <a href="../HTMLCSS_Course.php">
                        <div class="course-img">
                            <img src="../assets/img/HTML and CSS Course.jpg" alt="HTML CSS Full Course">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">HTML & CSS Full Course</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - English</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 06:31:24s</p>
                        </div>
                    </a>
                </div>

                <div class="cols">
                    <a href="../JavaScriptCourse.php">
                        <div class="course-img">
                            <img src="../assets/img/javascript course.png" alt="JavaScript Course">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">JavaScript Full Course</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - Hindi</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 03:44:16s</p>
                        </div>
                    </a>
                </div>

                <div class="cols">
                    <a href="./PHPCourse.php">
                        <div class="course-img">
                            <img src="../assets/img/PHP course.jpg" alt="PHP Full Course">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2"> PHP & MySQL Full Course</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - Hindi</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 02:33:44s</p>
                        </div>
                    </a>
                </div>

                <div class="cols">
                    <a href="../ReactJSCourse.php">
                        <div class="course-img">
                            <img src="../assets/img/React Course.png" alt="React JS Full Course">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">React Full Course</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - English</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 11:55:27s</p>
                        </div>
                    </a>
                </div>
                <div class="cols">
                    <a href="../MongoDBCourse.php">
                        <div class="course-img">
                            <img src="../assets/img/MongoDB Course.jpg" alt="Mongo DB in one Video">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">Mongo DB Full Course</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - English</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 02:22:09s</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- PROGRAMMING LANGUAGE -->
            <h3 class="px-4 pt-4">Programing Language</h3>
            <div class="courses-rows p-2" id="programing-lang">
                <div class="cols">
                    <a href="../CourseJava.php">
                        <div class="course-img">
                            <img src="../assets/img/Java Course.jpg" alt="Java Course">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">Java Full Crash Course</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - Hindi</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 02:30:02s</p>
                        </div>
                    </a>
                </div>

                <div class="cols">
                    <a href="../CourseC++.php">
                        <div class="course-img">
                            <img src="../assets/img/C++ Course.jpg" alt="C++ Course">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">C++ Course For Beginers</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - English</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 04:01:19s</p>
                        </div>
                    </a>
                </div>

                <div class="cols">
                    <a href="../CoursePython.php">
                        <div class="course-img">
                            <img src="../assets/img/Python Course.jpg" alt="Python">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">Learn Python Full</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - Hindi</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 11:52:23s</p>
                        </div>
                    </a>
                </div>

                <div class="cols">
                    <a href="../CourseDSA.php">
                        <div class="course-img">
                            <img src="../assets/img/DSA Course.png" alt="DSA Course">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">Learn DSA From Easy to Advance</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - English</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 08:03:17s</p>
                        </div>
                    </a>
                </div>

                <div class="cols">
                    <a href="../CourseCSharp.php">
                        <div class="course-img">
                            <img src="../assets/img/C Sharp Course.jpg" alt="C# Full Course">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">C# Full Crash Course</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - English</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 04:31:08s</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Mobile Development -->
            <h3 class="px-4 pt-4">Mobile Development</h3>
            <div class="courses-rows p-2" id="programing-lang">
                <div class="cols">
                    <a href="../CourseJavaAndroidDev.php">
                        <div class="course-img">
                            <img src="../assets/img/Android-Java-Development.jpg" alt="Android Development with Java">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">Android Development with Java</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - English</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 03:11:12s</p>
                        </div>
                    </a>
                </div>

                <div class="cols">
                    <a href="../CourseKotlinDev.php">
                        <div class="course-img">
                            <img src="../assets/img/Android-Kotlin-Development.jpg" alt="Android Development (Kotlin)">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">Android Development (Kotlin)</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - English</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 02:28:30s</p>
                        </div>
                    </a>
                </div>

                <div class="cols">
                    <a href="../CourseFlutterDev.php">
                        <div class="course-img">
                            <img src="../assets/img/Android-Flutter-Development.jpg" alt="Flutter Android Development ">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">Android Development (Flutter)</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - Hindi</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 03:11:12s</p>
                        </div>
                    </a>
                </div>

                <div class="cols">
                    <a href="#">
                        <div class="course-img">
                            <img src="../assets/img/Swift-Development.jpg" alt="IOS Development ">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">IOS Development with Swift</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - Hindi</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 03:11:12s</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- MS OFFICE -->
            <h3 class="px-4 pt-4">Microsoft Office</h3>
            <div class="courses-rows p-2" id="programing-lang">
                <div class="cols">
                    <a href="#">
                        <div class="course-img">
                            <img src="../assets/img/Microsoft-Word-course.jpg" alt="Ms Word Course">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">MS Word Full Crash Course</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - Hindi</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 03:11:12s</p>
                        </div>
                    </a>
                </div>

                <div class="cols">
                    <a href="#">
                        <div class="course-img">
                            <img src="../assets/img/powerpoint.jpg" alt="Ms PowerPoint Course">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">MS Power Point Full Crash Course</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - Hindi</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 03:11:12s</p>
                        </div>
                    </a>
                </div>

                <div class="cols">
                    <a href="#">
                        <div class="course-img">
                            <img src="../assets/img/Microsoft-Excel-course.jpg" alt="MS Excel Course">
                        </div>
                        <div class="course-name">
                            <p class="px-2 pt-2">MS Excel Complete Course</p>
                        </div>
                        <div class="course-lang">
                            <p class="px-2">Language - Hindi</p>
                        </div>
                        <div class="course-duration">
                            <p class="px-2"><b>Duration </b> 03:11:12s</p>
                        </div>
                    </a>
                </div>

            </div>
    </section>

    <footer style="background-color: blueviolet; padding:2rem;">
        <h3 class="text-white text-center">© Copyright Learny Inc. | 2022</h3>
    </footer>

    <script>
        const openMenu = () => {
            let menu = document.getElementById("usr-dashboard");
            if (menu.style.right == "-140px") {
                menu.style.right = "12px"
            } else {
                menu.style.right = "-140px"
            }
        }
    </script>

</body>

</html>