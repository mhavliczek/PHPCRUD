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
<h3 class="text-center">Search Data Php</h3>
<div class="row">
    <div class="col-2"></div>
    <div class="col-6">
        <form action="Search.php" method="POST">
            <div class="form-group">
                <label class="col-md-6 control-label" for="username">User ID</label>
                <div class="col-md-6">
                    <input id="uid" name="uid" type="text" placeholder="uid" class="form-control input-md">

                </div>
                <br>
                <div class="form-group">
                    <div class="col-md-8">
                        <button id="Search" name="Search" class="btn btn-success"> Search Data </button>
                    </div>
                </div>
        </form>
    </div>
    <div class="col-2"></div>
</div>

<div class="row">
    <div class="col-2"></div>
    <br>
    <div class="col-6">

        <?php
        include("dbconfig.php");
        if (isset($_POST['Search'])) {
        ?>
        <br>
            <table border="1" class="table  table-hover">
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>


            <?php
            $sql = "SELECT * FROM user";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["userid"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["password"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
        }

            ?>
            </table>
    </div>
    <div class="col-2"></div>
</div>


</body>

</html>