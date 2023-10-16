<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Detail</title>
    <!--------------------------- Remix Icon Link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/course_detail.css">
</head>
<body>
    <!--------------------------- navbar --------------------------->
    <?php include "../components/navbar.php"; ?>

    <!--------------------------- main --------------------------->
    <div class="main">

        <!------------ section1 ------------>
        <div class="section1">
            <div class="left-section1">
                <div class="detail">
                    <h1>Python Course for Beginner</h1>
                    <p>Unlock the power of Python with our comprehensive e-learning course. This hands-on program will teach you the fundamentals of Python, from variables and loops to data structures and functions. Whether you're looking to kickstart a programming career or simply want to automate tasks, our course will equip you with the skills you need. Enroll today and start your Python journey with us.</p>
                    <?php 
                    
                        if(isset($_SESSION['studentName'])){

                    ?>

                    <button class="join-course-btn"><a href="course_playlist.php">Join Our Course</a><i class="ri-arrow-right-double-line"></i></button>

                    <?php
                    
                        }
                        else{

                    ?>

                    <button class="join-course-btn"><a href="login.php">Join Our Course</a><i class="ri-arrow-right-double-line"></i></button>
                    

                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="right-section1">
                <video controls autoplay muted width="480" height="290">
                    <source src="../video/v1.mp4" type="video/mp4" >
                </video>
            </div>
        </div>

        <!------------ section2 ------------>
        <div class="section2">
            <h1>Coures Overview</h1>
            <div class="course-overview">
                <div class="left-section2">
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Introduction Programing and Python</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Modules, Comments & Pip</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Comment, escape Sequences, String</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Prectice Set 1</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Lists & Tuples</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Variable and Data Types</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>User Inputs and Opearator</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>If...Else Conditional Statement and Switch case</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Loops in Python</p>
                    </div>
                </div>

                <div class="right-section2">
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Break and Continue</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Prectice Set 2</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p> Functions & Recursion</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Set Method In Python</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Object Oriented Programming</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Inheritance</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Dictionaries and Diction Method</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Prectice Set 3</p>
                    </div>
                    <div class="topic-name">
                        <i class="ri-check-line"></i>
                        <p>Snake, Water, Gun Game</p>
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