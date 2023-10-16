<?php

    include "../database/connection.php";

    if(isset($_POST['btnContect'])){
        $sname = mysqli_real_escape_string($con, $_POST["sname"]);
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $message = mysqli_real_escape_string($con, $_POST["message"]);

        $sql = "INSERT INTO contact_us (name, email, msg) VALUES ('$sname', '$email', '$message')";

        $result = mysqli_query($con, $sql);

        if(!$result){
            die("Record is not Inserted" . mysqli_error($con));
        }
        else{
            // echo "Record is Inserted";
            header("location:home.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contect Us</title>
    <!--------------------------- Remix Icon Link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/contact_us.css">
</head>
<body>
    <!--------------------------- main --------------------------->
    <div class="main">
        <!--------------------------- left-section --------------------------->
        <div class="left-section">
            <!------------ nav ------------>
            <div class="nav">
                <a href="home.php">
                    <i class="ri-code-s-slash-line"></i>
                    <h2>Coding School</h2>
                </a>
            </div>

            <!------------ form-section ------------>
            <div class="form-section">
                <div class="contact-form">
                    <div class="contact-heading">
                        <h1>Send Message</h1>
                        <p>Let's Send message to solve you question</p>
                    </div>
                    <form action="" method="post" onsubmit="return validation()">
                        <div class="form">
                            <label for="name">Your Name</label>
                            <input type="text" name="sname" id="student-name" autocomplete="off">
                            <p id="errorSname" class="error"></p>
                        </div>
                        <div class="form">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="student-email" autocomplete="off">
                            <p id="errorEmail" class="error"></p>
                        </div>
                        <div class="form">
                            <label for="message">Message</label>
                            <textarea name="message" id="smessage" cols="" rows="5"></textarea>
                            <p id="errorMessage" class="error"></p>
                        </div>
                        <div class="form">
                            <button type="submit" name="btnContect" class="message-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                
        <!--------------------------- right-section --------------------------->
        <div class="right-section">
            <!------------ contect-detail-section ------------>
            <div class="contact-detail-section">
                <div class="detail">
                    <div class="heading">
                        <h1>Contact Information</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, totam. Recusandae impedit repudiandae vero voluptatum nostrum est dolores pariatur! Odit harum consectetur unde sunt exercitationem fuga nam at quibusdam molestiae.</p>
                    </div>
                    <div class="contact-heandlers">
                        <div class="contact-card">
                            <i class="ri-phone-fill"></i>
                            <p>+91 98346 75678</p>
                        </div>
                        <div class="contact-card">
                            <i class="ri-mail-fill"></i>
                            <p>codingschool@gmail.com</p>
                        </div>
                        <div class="contact-card">
                            <i class="ri-map-pin-fill"></i>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="social-media">
                            <i class="ri-facebook-fill"></i>
                            <i class="ri-twitter-fill"></i>
                            <i class="ri-instagram-fill"></i>
                            <i class="ri-linkedin-fill"></i>
                            <i class="ri-discord-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <!--------------------------- script --------------------------->
    <script src="../js/contect_us.js"></script>
</body>
</html>