<?php

    include "../database/connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recover Email</title>
    <!--------------------------- Remix Icon Link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/recover_password.css">
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

            <!------------ recover-password-section ------------>
            <div class="recover-password-section">
                <div class="recover-password-form">
                    <div class="recover-password-heading">
                        <h1>Recover Password</h1>
                        <p>Let's Recover you password and change password</p>
                    </div>

                    <form action="" method="post" onsubmit="return validation()">
                        <!-- email -->
                        <div class="form">
                            <label for="student-email">Email</label>
                            <input type="email" name="email" id="student-email" autocomplete="off">
                            <p class="error" id="errorEmail"></p>
                        </div>
                        <!-- Recover Email btn -->
                        <div class="form">
                            <button type="submit" name="btnRecoverPassword" class="recover-password-btn">Send Mail</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--------------------------- right-section --------------------------->
        <div class="right-section">
            <img src="../image/placement.webp" class="reset-pword-img">
        </div>

    </div>

    <!--------------------------- sweetalert JS --------------------------->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--------------------------- script --------------------------->
    <script>
        let email = document.getElementById("student-email");
        let flag = 1;

        // -------------------- Email --------------------
        function semail(){
            let error = document.getElementById("errorEmail");
            let reg = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    
            if(email.value == ""){
                error.innerHTML = "Enter Your Email Address";
                flag = 0;
            }
            else if(!reg.test(email.value)){
                error.innerHTML = "Please enter a valid Email Address (e.g. abc12@gmail.com)";
                flag = 0;
            }
            else{
                error.innerHTML = "";
                flag = 1;
            }
        }

        // -------------------- Validation --------------------
        function validation() {
            semail();
        
            if (flag) {
                return true;
            } else {
                return false;
            }
        }

        // -------------------- Email --------------------
        email.addEventListener("blur", function () {
            let error = document.getElementById("errorEmail");
            let reg = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

            if (email.value == "") {
                error.innerHTML = "Enter Your Email Address";
            }
            else if (!reg.test(email.value)) {
                error.innerHTML = "Please enter a valid Email Address (e.g. abc12@gmail.com)";
            }
            else {
                error.innerHTML = "";
            }
        })
    </script>

    <!--------------------------- recover email --------------------------->
    <?php
    
        if(isset($_POST['btnRecoverPassword'])){
            $email = mysqli_real_escape_string($con, $_POST['email']);

            $emailQuery = "SELECT * FROM signup WHERE email = '$email'";
            $query = mysqli_query($con, $emailQuery);
            $emailCount = mysqli_num_rows($query);

            if($emailCount){

                $student_data = mysqli_fetch_array($query);
                $student_name = $student_data['name'];
                $token = $student_data['id'];

                $subject = "Password Reset";
                $body = "Hi, $student_name. Click here too reset your password http://localhost/project/e-learning/src/reset_password.php?token=$token";
                $sender_email = "From : darshanvirani21@gmail.com";

                if(mail($email, $subject, $body, $sender_email)){
                    // header("location:logout.php");
    ?>

    <script>
        Swal.fire({
            icon: 'success',
            title: 'Send Email Successfully...',
            text: 'Please check your email and click the link to access the password reset page.',
            confirmButtonText: "Ok",
            confirmButtonColor: "rgb(170, 145, 199)"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'logout.php';
            }
        });  
    </script>

    <?php
                }
                else{
                    echo "<script>alert('Email Sending Failed')</script>";
                }
            }
            else{
                echo "<script>alert('Email is not Found')</script>";
            }
        }
    
    ?>
</body>

</html>