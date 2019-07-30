<?php
    include "connect.php";

?>

<html>
<head>
    <title>Sign Up Page </title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/sign_up.css">
    

</head>
<body>

    <br><br><br><br>

    <center><h1>Subscribe for newsletter 🖊</h1></center>
    <hr>

    <center><div class="container">
        <form action="signup_try.php" method="post">

            <div class="form group-row">
                <input placeholder="user id e.g, u1/u2/u3" type="text" name="user_id" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <select class="my_select">
                    <option>-SELECT-</option>
                    <option>Daily</option>
                    <option>Weekly - recommended</option>
                    <option>Monthly</option>
                </select>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="User Name" type="text" name="username" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="Password" type="password" name="password" class="form-control col-sm-4" required>
            </div>
            <br>
            <!-- submit button -->
            <div class="form group-row">
                <button type="submit" class="col-sm-4 btn btn-info btn-block"> Add</button>
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
    </div></center>



    <br>
</body>
</html>



