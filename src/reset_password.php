<?php

    include "../database/connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <!--------------------------- Remix Icon Link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/reset_password.css">
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

            <!------------ reset-pword-section ------------>
            <div class="reset-pword-section">
                <div class="reset-pword-form">

                    <!------------ reset-pword-heading ------------>
                    <div class="reset-pword-heading">
                        <h1>Reset Password</h1>
                        <p>Let's Reset your Password and Secure profile</p>
                    </div>

                    <!------------ reset-pword form ------------>
                    <form action="" method="post" onsubmit="return validation()">
                        <!-- Reset Password -->
                        <div class="form">
                            <label for="password">New Password</label>
                            <input type="password" name="new-password" id="new-password" autocomplete="off">
                            <p class="error" id="errorNewPassword"></p>
                        </div>

                        <!-- Reset Conform Password -->
                        <div class="form">
                            <label for="password">Confirm Password</label>
                            <input type="password" name="confirm-password" id="confirm-password" autocomplete="off">
                            <p class="error" id="errorConfirmPassword"></p>
                        </div>

                        <!-- reset-password btn -->
                        <div class="form">
                            <button type="submit" name="btnResetPword" class="reset-pword-btn">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--------------------------- right-section --------------------------->
        <div class="right-section">
            <img src="" class="reset-pword-img">
        </div>
    </div>

    <!--------------------------- sweetalert JS --------------------------->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--------------------------- script --------------------------->
    <script src="../js/reset_password.js"></script>

    <?php
    
        if(isset($_POST['btnResetPword'])){

            if(isset($_GET['token'])){

                $id = $_GET['token'];

                $new_password = mysqli_real_escape_string($con, $_POST['new-password']);
                $confirm_password = mysqli_real_escape_string($con, $_POST['confirm-password']);
    
                $new_pword = password_hash($new_password, PASSWORD_BCRYPT);
                $confirm_pword = password_hash($confirm_password, PASSWORD_BCRYPT);

                if($new_password === $confirm_password){

                    $updateQuery = "UPDATE signup SET password = '$new_pword' WHERE id = '$id'";

                    $result = mysqli_query($con, $updateQuery);

                    if($result){
                        // header("location:login.php");

    ?>

    <script>
        Swal.fire({
            icon: 'success',
            title: 'Successfully Reset Password',
            text: 'You Password is Successfully reset, please Login again.',
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
                    echo "<script>alert('Password is not updated')</script>";
                    }
                }
            }
            else{
                echo "<script>
                    alert('Password are not matching')
                </script>";
            }
        }
    
    ?>
</body>
</html>