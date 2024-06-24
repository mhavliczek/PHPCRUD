<?php
include("dbconfig.php");
if (isset($_POST['updatebtn'])) {
    $id=$_POST["id"]; 
    $uname=$_POST["email"];
    $fname=$_POST["firstname"];
    $sql = "UPDATE user SET password='$fname'  WHERE userid='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
