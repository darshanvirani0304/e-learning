<?php

    include "../database/connection.php";

    session_start();

    if(isset($_POST['btnSignup'])){
        $sname = mysqli_real_escape_string($con, $_POST['sname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $pword = mysqli_real_escape_string($con, $_POST['pword']);
        $pno = mysqli_real_escape_string($con, $_POST['pno']);

        $pwordFormat = password_hash($pword, PASSWORD_BCRYPT);

        $emailQuery = "SELECT * FROM signup WHERE email = '$email'";
        $query = mysqli_query($con, $emailQuery);

        $emailCount = mysqli_num_rows($query);

        if ($emailCount > 0) {
            echo "<script>
                alert('Email Already Exists !');
            </script>";
        }
        else{
            $sql = "INSERT INTO signup (name, email, password, phone_no) VALUES ('$sname', '$email', '$pwordFormat', '$pno')";
            $result = mysqli_query($con, $sql);
            if(!$result){
                die("Record is not Inserted" . mysqli_error($con));
            }
            else{
                // echo "Record is Inserted";
                header("location:login.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <!--------------------------- Remix Icon Link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/signup.css">

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

            <!--------------------------- form-section --------------------------->
            <div class="signup-section">
                <div class="signup-form">
                    <!------------ signup-heading ------------>
                    <div class="signup-heading">
                        <h1>Create Your Account</h1>
                        <p>Let's kick things off by getting to know our school better</p>
                    </div>

                    <!------------ signup form ------------>
                    <form action="signup.php" method="post" onsubmit="return validation()">
                        <!-- studnet name -->
                        <div class="form">
                            <label for="student-name">Name</label>
                            <input type="text" name="sname" id="student-name" autocomplete="off">
                            <p class="error" id="errorSname"></p>
                        </div>
                        <!-- student email -->
                        <div class="form">
                            <label for="student-email">Email</label>
                            <input type="email" name="email" id="student-email" autocomplete="off">
                            <p class="error" id="errorEmail"></p>
                        </div>
                        <!-- password -->
                        <div class="form">
                            <label for="password">Password</label>
                            <input type="password" name="pword" id="password" autocomplete="off">
                            <p class="error" id="errorPassword"></p>
                        </div>
                        <!-- phone no -->
                        <div class="form">
                            <label for="phoneno">Phone No</label>
                            <input type="text" name="pno" id="phoneno" autocomplete="off">
                            <p class="error" id="errorPhoneno"></p>
                        </div>
                        <!-- signup btn -->
                        <div class="form">
                            <button type="submit" name="btnSignup" class="signup-btn">Sign up</button>
                        </div>
                    </form>

                    <!------------ singup-footer ------------>
                    <div class="signup-footer">
                        <p class="question">Already have an account? <a href="login.php">Log in</a></p>
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
    <script src="../js/signup.js"></script>

</body>
</html>