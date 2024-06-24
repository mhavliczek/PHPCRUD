<?php
include("dbconfig.php");
if (isset($_POST['Save'])) {

    $successMessage = "Your data Has been Succesfully Saved";
    $errorMessage = "Your data Has been not saved ";
    $redirectUrl = "insert.php";
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user (username,email,password)
VALUES ('$username','$email','$password')";

    if (mysqli_query($conn, $sql)) {
       echo "<script>
    alert('$successMessage');
    window.location.href = '$redirectUrl';
    </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);





    // echo "<script>
    // alert('$alertMessage');
    // window.location.href = '$redirectUrl';
    // </script>";
}
