<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--------------------------- Remix Icon Link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--------------------------- Swiper JS --------------------------->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
    <!--------------------------- navbar --------------------------->
    <?php include "../components/navbar.php"; ?>

    <!--------------------------- main --------------------------->
    <div class="main">
        <!--------------------------- Section1 --------------------------->
        <div class="section1">
            <!-- left-section -->
            <div class="left-section1">
                <div class="detail">
                    <h1 class="heading">Want to <span>Learn</span></h1>
                    <p class="learn"><span class="language">HTMl</span></p>
                    <p class="description">We Make Program simple & easy to Understand. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam tempore doloremque nulla, dolorum accusantium porro officiis doloribus quia eveniet magni?</p>
                    <button class="join-course-btn"><a href="course.php">Join Our Course</a><i class="ri-arrow-right-double-line"></i></button>
                </div>
            </div>

            <!-- right-section -->
            <div class="right-section1">
                <img src="../image/main.png" alt="Coding">
            </div>
        </div>

        <!--------------------------- Section2 --------------------------->
        <div class="section2">
            <h1>India Most Loved Coding Community</h1>
            <div class="info-box">
                <div class="card">
                    <div class="number">
                        <i class="ri-graduation-cap-line"></i>
                        <h2 class="count-numbers" data-number="100000">0+</h2>
                    </div>
                    <h3 class="info-description">Happy Learners</h3>
                </div>
                <div class="card">
                    <div class="number">
                        <i class="ri-eye-line"></i>
                        <h2 class="count-numbers" data-number="500000">0+</h2>
                    </div>
                    <h3 class="info-description">Monthly Views</h3>
                </div>
                <div class="card">
                    <div class="number">
                        <i class="ri-links-line"></i>
                        <h2 class="count-numbers" data-number="50000">0+</h2>
                    </div>
                    <h3 class="info-description">New Monthly Subscribers</h3>
                </div>
            </div>
        </div>

        <!--------------------------- Section3 --------------------------->
        <div class="section3">
            <!-- left-section -->
            <div class="left-section3">
                <div class="detail">
                    <h1>Elevate your knowledge from anywhere with our e-learning platform</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt temporibus suscipit molestias
                        quod obcaecati incidunt omnis veniam nobis tempora accusantium, soluta, ipsum laborum illum sed
                        neque. Nobis, natus, quod quas voluptatem quo dignissimos quae rerum aperiam labore magni sequi
                        fuga.</p>
                    <button class="join-course-btn"><a href="course.php">Join Our Course</a><i
                            class="ri-arrow-right-double-line"></i></button>
                </div>
            </div>

            <!-- right-section -->
            <div class="right-section3">
                <img src="../image/main2.png" alt="Progress Image">
            </div>
        </div>

        <!--------------------------- section4 --------------------------->
        <div class="section4">
            <div class="slide-container swiper mySwiper">
                <div class="card-wrapper swiper-wrapper">
                    <!-- (1) -->
                    <div class="card swiper-slide">
                        <div class="icon-box">
                            <i class="ri-code-s-slash-line"></i>
                        </div>
                        <div class="content">
                            <h2>Top Instructors</h2>
                            <p>Learn Live from instructors working in companies like Microsoft, Amazon, Google, Atlassian etc.</p>
                        </div>
                    </div> 
                    <!-- (2) -->
                    <div class="card swiper-slide">
                        <div class="icon-box">
                            <i class="ri-presentation-line"></i>
                        </div>
                        <div class="content">
                            <h2>Live Mentorship</h2>
                            <p>How to build your resume get a referral - all these will be covered in Mentorship Sessions.</p>
                        </div>
                    </div> 
                    <!-- (3) -->
                    <div class="card swiper-slide">
                        <div class="icon-box">
                            <i class="ri-headphone-line"></i>
                        </div>
                        <div class="content">
                            <h2>Doubt Assistance</h2>
                            <p>Get access to Teaching assistants & Weekly Doubt assistance sessions when you are stuck.</p>
                        </div>
                    </div> 
                    <!-- (4) -->
                    <div class="card swiper-slide">
                        <div class="icon-box">
                            <i class="ri-book-mark-line"></i>
                        </div>
                        <div class="content">
                            <h2>Library Feature</h2>
                            <p>Get a library of questions with solutions asked by top companies like Amazon, Google, Atlassian & more.</p>
                        </div>
                    </div> 
                    <!-- (5) -->
                    <div class="card swiper-slide">
                        <div class="icon-box">
                            <i class="ri-user-line"></i>
                        </div>
                        <div class="content">
                            <h2>Community</h2>
                            <p>Having a vibrant & helping community will help you in your journey. Interact with your batchmates.</p>
                        </div>
                    </div> 
                </div>
                <div class="swiper-button-next slide-btn"></div>
                <div class="swiper-button-prev slide-btn"></div>
                <div class="swiper-pagination"></div>             
            </div>
        </div>

        <!--------------------------- Section5 --------------------------->
        <div class="section5">
            <h1>Our Student have been <br> <span>hired</span> by</h1>
            <div class="company_name">
                <img src="../image/company_name/c1.png" alt="company_logo">
                <img src="../image/company_name/c2.png" alt="company_logo">
                <img src="../image/company_name/c3.png" alt="company_logo">
                <img src="../image/company_name/c4.png" alt="company_logo">
                <img src="../image/company_name/c5.png" alt="company_logo">
                <img src="../image/company_name/c6.png" alt="company_logo">
                <img src="../image/company_name/c7.png" alt="company_logo">
                <img src="../image/company_name/c8.png" alt="company_logo">
            </div>
            <p>+ Meny More who secured internship & placement in top tech companies</p>
            <div class="center-btn">
                <button class="join-course-btn"><a href="course.php">Join Our Course</a><i class="ri-arrow-right-double-line"></i></button>
            </div>
        </div>

        <!--------------------------- Footer --------------------------->
        <?php include "../components/footer.php" ?>

        <!--------------------------- scroll-top btn --------------------------->
        <?php include "../components/scroll-top.php"; ?>
        
        <!--------------------------- Typed JS --------------------------->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

        <!--------------------------- Swiper JS --------------------------->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!--------------------------- script --------------------------->
        <script src="../js/home.js"></script>

</body>

</html>