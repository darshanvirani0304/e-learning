<?php

    session_start();
    include "../database/connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <!--------------------------- Remix Icon Link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <!--------------------------- nav --------------------------->
    <div class="nav">
        <!--------------------------- left-nav --------------------------->
        <div class="left-nav">
            <a href="home.php">
                <i class="ri-code-s-slash-line"></i>
                <h2>Coding School</h2>
            </a>
        </div>

        <!--------------------------- right-nav --------------------------->
        <div class="right-nav">
            <ul>
                <li><a href="../src/home.php">Home</a></li>
                <li><a href="../src/course.php">Course</a></li>
                <li><a href="../src/contact_us.php">Contact us</a></li>
                <li class="dropdown-menu">
                    <a href="#">Profile</a>
                    <div class="profile-box">
                        <!-- user-info -->

                        <div class="user-info">
                            <?php

                                if(isset($_SESSION['studentName'])){

                            ?>
                            
                            <h2 class="user-name"><?php echo $_SESSION['studentName'];?></h2>
                            <p class="user-email"><?php echo $_SESSION['studentEmail'];?></p>

                            <?php
                                }
                                else{
                                    echo "<p style='color: rgb(170, 145, 199); font-weight: 700; font-size: 12px;'>Sign up for Free and learn new Skills</p>";
                                }
                            ?>
                        </div>

                        <?php
                        
                            if(!isset($_SESSION['studentName'])){
                        
                        ?>

                        <!------------ after login ------------>
                        <div class="after-login-section">
                            <div class="card">
                                <i class="ri-login-box-line"></i>
                                <a href="../src/login.php">Login</a>
                            </div>
                            <div class="card">
                                <i class="ri-user-add-line"></i>
                                <a href="../src/signup.php">Sign up</a>
                            </div>
                        </div>

                        <?php

                            }
                            else{
            
                        ?>

                        <!------------ before login ------------>
                        <div class="before-login-section">
                            <div class="card">
                                <i class="ri-logout-box-line"></i>
                                <a href="../src/logout.php">Logout</a>
                            </div>
                            <div class="card">
                                <i class="ri-loop-left-line"></i>
                                <a href="../src/update_profile.php">Update Profile</a>
                            </div>
                            <div class="card">
                                <i class="ri-lock-password-line"></i>
                                <a href="../src/recover_password.php">Reset Password</a>
                            </div>
                            <div class="card">
                                <i class="ri-user-unfollow-line"></i>
                                <a href="../src/delete_account.php">Delete Account</a>
                            </div>
                        </div>

                        <?php

                            }
            
                        ?>
                    </div>
                </li>
                <li><a href="../src/about_us.php">About</a></li>
            </ul>
        </div>

        <!--------------------------- toggle button --------------------------->
        <div class="toggle-btn">
            <i class="ri-menu-line open"></i>
            <i class="ri-close-line close"></i>
        </div>      
    </div>

    <!--------------------------- script --------------------------->
    <script>
        let toggleMenu = document.querySelector(".toggle-btn");
        let navbar = document.querySelector(".nav");

        toggleMenu.addEventListener("click", function(){
            navbar.classList.toggle("active");
        })
    </script>
</body>
</html>