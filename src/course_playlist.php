<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Playlist</title>
    <!--------------------------- Remix Icon Link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--------------------------- font-awsome Link --------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/course_playlist.css">
</head>
<body>
    <!--------------------------- navbar --------------------------->
    <?php include "../components/navbar.php"; ?>

    <!--------------------------- main --------------------------->
    <div class="main">
        <!--------------------------- section --------------------------->
        <div class="section">
            <!------------ left-section ------------>
            <div class="left-section">
                <div class="video-section">
                    <div class="play-video">
                        <video controls autoplay class="play-video-start">
                            <source src="../video/v1.mp4" type="video/mp4" class="play-video-start">
                        </video>
                    </div>
                    <div class="description">
                        <h2 class="main-heading">1. Introduction to Programing and Python</h2>
                        <p class="detail">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam soluta sequi assumenda quasi fuga cum quo totam illum, rem aliquam!</p>
                    </div>
                </div>
            </div>

            <!------------ right-section ------------>
            <div class="right-section">
                <div class="sub-section">

                    <!-- playlist-heading -->
                    <div class="playlist-heading">
                        <h3>Python language for Begginer</h3>
                        <div class="lession-detail">
                            <p>10 Lessions</p>
                            <div class="bullet"></div>
                            <p>5h 20m 40s</p>
                        </div>
                    </div>
    
                    <!-- course-playlist -->
                    <div class="course-playlist">
                        <!-- import json file data -->
                    </div>
                </div>
            </div>  
        </div>

        <!--------------------------- course-material-section --------------------------->
        <div class="course-material-section">.
            <h1 class="heading">Download Material for Your Knowledge</h1>
            <div class="course-material">
                <div class="material">
                    <div class="box">
                        <i class="fa-brands fa-python"></i>
                    </div>
                    <div class="download">
                        <h2>Python</h2>
                        <p>Download Python Course pdf. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, officia?</p>
                        <a href="../pdf/python.pdf" download="python"><button type="button">Download Now</button></a>
                    </div>
                </div>
                <div class="material">
                    <div class="box">
                        <i class="fa-brands fa-html5"></i>
                    </div>
                    <div class="download">
                        <h2>HTML</h2>
                        <p>Download HTML Course pdf. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="../pdf/html.pdf" download="HTML"><button type="button">Download Now</button></a>
                    </div>
                </div>
                <div class="material">
                    <div class="box">
                        <i class="fa-brands fa-css3-alt"></i>
                    </div>
                    <div class="download">
                        <h2>CSS</h2>
                        <p>Download CSS Course pdf. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, officia?</p>
                        <a href="../pdf/css.pdf" download="CSS"><button type="button">Download Now</button></a>
                    </div>
                </div>
                <div class="material">
                    <div class="box">
                        <i class="fa-brands fa-js"></i>
                    </div>
                    <div class="download">
                        <h2>Javascript</h2>
                        <p>Download JavaScript Course pdf. Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="../pdf/js.pdf" download="JavaScript"><button type="button">Download Now</button></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!--------------------------- Footer --------------------------->
        <?php include "../components/footer.php"; ?>
    
        <!--------------------------- scroll-top --------------------------->
        <?php include "../components/scroll-top.php"; ?>
    </div>

    <!--------------------------- script --------------------------->
    <script src="../js/course_playlist.js"></script>


</body>
</html>