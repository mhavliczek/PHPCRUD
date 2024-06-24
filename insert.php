<?php
include("dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("inhead.html"); ?>
</head>

<body>
    <?php include("nav.html"); ?>
    <h3 class="text-center">Save Php</h3>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">
            <form action="insertdata.php" method="POST">
                <div class="form-group">
                    <label class="col-md-6 control-label" for="username">User Name</label>
                    <div class="col-md-6">
                        <input id="username" name="username" type="text" placeholder="username" class="form-control input-md">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label" for="email">Email</label>
                    <div class="col-md-6">
                        <input id="email" name="email" type="email" placeholder="email" class="form-control input-md">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label" for="password">Password</label>
                    <div class="col-md-6">
                        <input id="password" name="password" type="password" placeholder="password" class="form-control input-md">

                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-md-8">
                        <button id="Save" name="Save" class="btn btn-success">   Insert Data  </button>
                        <input type="reset" class="btn btn-danger" value=" Reset Form" >
                    </div>
                </div>
            </form>


        </div>
        <div class="col-2"></div>
    </div>

</body>

</html>