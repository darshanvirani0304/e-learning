<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <!--------------------------- Remix Icon Link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/course.css">
</head>
<body>
    <!--------------------------- main --------------------------->
    <div class="main">
        <!------------ navbar ------------>
        <?php include "../components/navbar.php"; ?>

        <!------------ section1 ------------>
        <div class="section1">
            <div class="course">
                <!-- (1) -->
                <div class="course-card">
                    <div class="course-img">
                        <img src="https://codewithharry.nyc3.cdn.digitaloceanspaces.com/assets/45f2c8ae4ba61cbf76d8f6d64c182359.png" alt="course image">
                    </div>
                    <div class="course-detail">
                        <h2 class="course-name">Python Course for Beginners</h2>
                        <p class="course-description">You Can Learn Python course basic to advance topics. This course For beginners and Python programing language is simple and easy.</p>
                        <div class="detail-box">
                            <i class="ri-user-2-fill"></i>
                            <p>Code with herry</p>
                        </div>
                        <div class="detail-box">
                            <i class="ri-movie-fill"></i>
                            <p>Recorded Video | Self Placed</p>
                        </div>
                        <div class="detail-box">
                            <i class="ri-graduation-cap-fill"></i>
                            <p>College Student & Working Professional   </p>
                        </div>
                        <button type="button" class="enroll-now"><a href="course_detail.php">Enroll Now</a><i class="ri-arrow-right-double-line"></i></button>
                    </div>
                </div>
                <!-- (2) -->
                <div class="course-card">
                    <div class="course-img">
                        <img src="https://cdn.pwskills.com/assets/uploads/thumbnails/63a2ecf58899439c8d7ebdc6.png" alt="course image">
                    </div>
                    <div class="course-detail">
                        <h2 class="course-name">Full Stack Web Development</h2>
                        <p class="course-description">Learn MERN stack: MongoDB, Express.js, React.js, Node.js. Build dynamic web apps. Gain hands-on full-stack skills.</p>
                        <div class="detail-box">
                            <i class="ri-user-2-fill"></i>
                            <p>Other 3 Faculty</p>
                        </div>
                        <div class="detail-box">
                            <i class="ri-movie-fill"></i>
                            <p>Recorded Video | Self Placed</p>
                        </div>
                        <div class="detail-box">
                            <i class="ri-graduation-cap-fill"></i>
                            <p>College Student & Working Professional   </p>
                        </div>
                        <button type="button" class="enroll-now"><a href="course_detail.php">Enroll Now</a><i class="ri-arrow-right-double-line"></i></button>
                    </div>
                </div>
                <!-- (3) -->
                <div class="course-card">
                    <div class="course-img">
                        <img src="https://i.ytimg.com/vi/ER9SspLe4Hg/maxresdefault.jpg" alt="course image">
                    </div>
                    <div class="course-detail">
                        <h2 class="course-name">JavaScript Course</h2>
                        <p class="course-description">Learn Ultimate JavaScript course Zero to Hero. You can Build Real time Project. This Course to you Learn Javascript basic to adcance.</p>
                        <div class="detail-box">
                            <i class="ri-user-2-fill"></i>
                            <p>Code With Herry</p>
                        </div>
                        <div class="detail-box">
                            <i class="ri-movie-fill"></i>
                            <p>Recorded Video | Self Placed</p>
                        </div>
                        <div class="detail-box">
                            <i class="ri-graduation-cap-fill"></i>
                            <p>College Student & Working Professional</p>
                        </div>
                        <button type="button" class="enroll-now"><a href="course_detail.php">Enroll Now</a><i class="ri-arrow-right-double-line"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!------------ footer ------------>
        <?php include "../components/footer.php"; ?>

        <!------------ scroll-top ------------>
        <?php include "../components/scroll-top.php"; ?>
    </div>
    
</body>
</html>