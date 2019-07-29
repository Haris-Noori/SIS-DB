<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();

?>

<html>
<head>
    <title>Admin | Managers </title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/add_club.css"> -->
    <link rel="stylesheet" type="text/css" href="../../css/add_club.css">
    

</head>
<body>

    <center><h2>Only delete the player when he leaves the premier League</h2></center>
    <hr>

    <center><div class="container">
        <form action="" method="post">

            <div class="form group-row">
                <input placeholder="Player ID to delete" type="text" name="player_id" class="form-control col-sm-4" required>
            </div>
            <br>
            <!-- submit button -->
            <div class="form group-row">
                <button type="submit" class="col-sm-4 btn btn-info btn-block">Delete</button>
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

<?php include "admin_footer.php"; ?>

<?php

    $player_id = $_POST["player_id"];

    //$qry = " SET FOREIGN_KEY_CHECKS = 0 ";
    $qry1 = " DELETE FROM players WHERE player_id='".$player_id."' ";
    //$qry2 = " SET FOREIGN_KEY_CHECKS = 1 ";

    if($con->query($qry1))
    {
        echo "<script>alert('Data Deleted Successfully')</script>";
    }
    else
    {
        echo "Query not working";
    }


?>

