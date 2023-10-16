<?php

    session_start();
    include "../database/connection.php";

    $id = $_SESSION['studentId'];

    $sql = "SELECT name, email, phone_no FROM signup WHERE id = $id";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];  
    $pno = $row['phone_no'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <!--------------------------- Remix Icon Link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/update_profile.css">
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
    
            <!------------ update-section ------------>
            <div class="update-section">
                <div class="update-form">
                    <div class="update-heading">
                        <h1>Update Profile</h1>
                        <p>Let's Update you personal detail and Secure profile</p>
                    </div>
    
                    <!------------ signup form ------------>
                    <form action="update_profile.php" method="post" onsubmit="return validation()">
                        <!-- studnet name -->
                        <div class="form">
                            <label for="student-name">Name</label>
                            <input type="text" name="sname" id="student-name" autocomplete="off" value="<?php echo $name; ?>">
                            <p class="error" id="errorSname"></p>
                        </div>
                        <!-- student email -->
                        <div class="form">
                            <label for="student-email">Email</label>
                            <input type="email" name="email" id="student-email" autocomplete="off" value="<?php echo $email; ?>">
                            <p class="error" id="errorEmail"></p>
                        </div>
                        <!-- phone no -->
                        <div class="form">
                            <label for="phoneno">Phone No</label>
                            <input type="text" name="pno" id="phoneno" autocomplete="off" value="<?php echo $pno; ?>">
                            <p class="error" id="errorPhoneno"></p>
                        </div>
                        <!-- signup btn -->
                        <div class="form">
                            <button type="submit" name="btnUpdate" class="update-btn">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <!--------------------------- right-section --------------------------->
        <div class="right-section">
            <img src="" class="update-image">
        </div>
    </div>

    <!--------------------------- sweetalert JS --------------------------->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--------------------------- script --------------------------->
    <script src="../js/update.js"></script>

    <!--------------------------- update record --------------------------->
    <?php

        if(isset($_POST['btnUpdate'])){
            $name = $_POST['sname'];
            $email = $_POST['email'];
            $pno = $_POST['pno'];

            $sql = "UPDATE signup SET name='$name', email='$email', phone_no='$pno' WHERE id = $id";
            $result = mysqli_query($con, $sql);

            if($result){
                // header("location:../src/logout.php");  
    ?>

    <script>
        Swal.fire({
            icon: 'success',
            title: 'Successfully Update Profile',
            text: 'Your Profile is Successfully Update, please Login again.',
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
                die("Profile is not Updated" . mysqli_error($con));
            }
        }
    ?>

</body>
</html>