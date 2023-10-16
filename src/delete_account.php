<?php

    session_start();
    include "../database/connection.php";

    $deleteId = $_SESSION['studentId'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <!--------------------------- CSS Link --------------------------->
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

    <!--------------------------- sweetalert JS --------------------------->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--------------------------- Delete Account --------------------------->
    <?php

        if(isset($_SESSION['studentId'])){
            $sql = "DELETE FROM signup WHERE id = $deleteId";
            $result = mysqli_query($con, $sql);

            if($result){
            // header("location:../src/logout.php");

    ?>

    <script>
        Swal.fire({
            icon: 'success',
            title: 'Account Successfully Deleted',
            text: 'Your account has been successfully deleted, but you can also create a new account.',
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
                echo "<script>alert('YourProfile is not Delete, please try again...')</script>";
            }
        }
        
    ?>
    
</body>
</html>

