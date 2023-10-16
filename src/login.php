<?php

    session_start();

    include "../database/connection.php";

    if(isset($_POST['btnLogin'])){
        $email = $_POST['email'];
        $pword = $_POST['pword'];

        $searchEmail = "SELECT * FROM signup WHERE email = '$email'";
        $query = mysqli_query($con, $searchEmail);
        $emailCount = mysqli_num_rows($query);

        if($emailCount){
            $emailToPword = mysqli_fetch_assoc($query);
            $password = $emailToPword['password'];

            // session
            $_SESSION['studentName'] = $emailToPword['name'];
            $_SESSION['studentEmail'] = $emailToPword['email'];
            $_SESSION['studentId'] = $emailToPword['id'];

            $decodePword = password_verify($pword, $password);

            if($decodePword){
                header("location:home.php");
            }
            else{
                // echo "Your Password is Wrong";
                echo "<script>
                    alert('Your Password is Wrong');
                </script>";
            }
        }
        else{
            // echo "Invalid Email";
            echo "<script>
                alert('Invalid Email');
            </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!--------------------------- Remix Icon Link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/login.css">

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

            <!------------ login-section ------------>
            <div class="login-section">
                <div class="login-form">
                    <!------------ login-heading ------------>
                    <div class="login-heading">
                        <h2>Welcome back</h2>
                        <p>Welcome back ! Please Enter your details</p>
                    </div>

                    <!------------ login form ------------>
                    <form action="login.php" method="post" onsubmit="return validation()">
                        <!-- Email -->
                        <div class="form">
                            <label for="student-email">Email</label>
                            <input type="email" name="email" id="student-email" autocomplete="off">
                            <p class="error" id="errorEmail"></p>
                        </div>
    
                        <!-- Password -->
                        <div class="form">
                            <label for="password">Password</label>
                            <input type="password" name="pword" id="password" autocomplete="off">
                            <p class="error" id="errorPassword"></p>
                        </div>
    
                        <!-- login btn -->
                        <div class="form">
                            <button type="submit" name="btnLogin"  class="login-btn">Log in</button>
                        </div>
                    </form>

                    <!------------ login-footer ------------>
                    <div class="login-footer">
                        <p class="question">Don't have an account? <a href="signup.php">Sign up for free</a></p>
                        <p class="question"><a href="recover_password.php">Forget Password</a></p>
                    </div>
                </div>

            </div>
        </div>

        <!--------------------------- right-section --------------------------->
        <div class="right-section">
            <img src="../image/placement.webp" alt="student work image">
        </div>
    </div>

    <!--------------------------- script --------------------------->
    <script src="../js/login.js"></script>
</body>
</html>