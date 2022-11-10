<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.svg" type="image/x-icon">

    <title>Learny Inc</title>

    <!-- stylesheet -->
    <link rel="stylesheet" href="./style/CoursesVideos.css">

    <?php include './cdnLinks.php'; ?>

</head>

<body>
    <?php include './components/Navbar.php'; ?>

    <section class="course-wrapper">
        <div class="container-xl">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/9cWm74DteMQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="video-desc">

                <div class="video-title">
                    <h4 class="pt-3">Complete MongoDB Course</h4>
                </div>

                <h6 class="py-1">In this full course, we learn about complete MongoDB.</h6>

                <div class="time-stamp">
                    Lessons:
                    <br>
                    ⏳ (00:00:00) Intro to MongoDB ?
                    <br>
                    ⏳ (00:08:14) Getting started
                    <br>
                    ⏳ (00:15:59) Using Mongosh
                    <br>
                    ⏳ (00:23:33) Create first database
                    <br>
                    ⏳ (00:34:59) Drop db and collection
                    <br>
                    ⏳ (00:41:11) Insert document
                    <br>
                    ⏳ (01:00:22) Query Document
                    <br>
                    ⏳ (01:11:58) Advanced Query Document
                    <br>
                    ⏳ (01:30:53) Update Document
                    <br>
                    ⏳ (01:46:17) Delete Document
                    <br>
                    ⏳ (01:53:24) Query Optimization
                    <br>
                    ⏳ (02:11:42) Aggregate Documents
                    <br>
                </div>

            </div>
        </div>
    </section>

    <?php include './components/Footer.php'; ?>
</body>

</html>