<!DOCTYPE html>
<head>
    <title>Admin | Log In</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin-login.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h1>Administrator</h1>
            </div>
        </div>
        <!-- form -->
        <form action="php_files/admin/admin_login_try.php" method="post">

            <div class="form group-row">
                <input placeholder="Username" type="text" name="admin_name" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="Password" type="password" name="admin_pass" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input type="submit" class="form-control col-sm-4 btn" id="submit_btn">
            </div>
            <br>
            <div class="form group-row">
                <?php
                    if(isset($_GET["Message"]))
                    {
                        echo "<div class='col-sm-4 alert alert-danger'>";
                        echo $_GET["Message"];
                        echo "</div>";
                    }
                ?>
            </div>
            
        </form>

    </div>
    

    <script src="js/bootstrap.min.js"></script>
</body>
</html>