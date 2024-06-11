<?php
include("dbconfig.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php include("nav.html"); ?>
<h3 class="text-center">Update Data Php</h3>
<div class="row">
    <div class="col-2"></div>
    <div class="col-6">
        <form action="Update.php" method="POST">
            <div class="form-group">
                <label class="col-md-6 control-label" for="username">User ID</label>
                <div class="col-md-6">
                    <input id="uid" name="uid" type="text" placeholder="uid" class="form-control input-md">

                </div>
                <br>
                <div class="form-group">
                    <div class="col-md-8">
                        <button id="Update" name="Update" class="btn btn-success"> Search Data </button>
                    </div>
                </div>
        </form>
    </div>
    <div class="col-2"></div>
</div>

<div class="row">
    <div class="col-2"></div>
    <br>
    <div class="col-8">

        <?php

        if (isset($_POST['Update'])) {
            $userId = $_POST['uid'];
            $sql = "SELECT * FROM user WHERE userid = '$userId'";
            $result = mysqli_query($conn, $sql);

            // Check if the query was successful and fetch the data
            if ($result && mysqli_num_rows($result) > 0) {
                $userData = mysqli_fetch_assoc($result);
            } else {
                $userData = null;
            } ?>

            <?php if ($userData) : ?>
                <br>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $userId; ?>">
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($userData['username']); ?>"><br><br>
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($userData['email']); ?>"><br><br>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($userData['password']); ?>"><br><br>
                    <input type="submit" value="Update" class="btn btn-danger">
                </form>
            <?php else : ?>
                <p>No user found with the specified ID.</p>
            <?php endif; ?>







        <?php
        }
        mysqli_close($conn);


        ?>

    </div>
    <div class="col-2"></div>
</div>


</body>

</html>