<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();

?>

<html>
<head>
    <title>Admin | Players </title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/add_club.css"> -->
    <link rel="stylesheet" type="text/css" href="../../css/add_club.css">
    

</head>
<body>

    <center><h2>Add a new Player Information</h2></center>
    <hr>

    <center><div class="container">
        <form action="" method="post">

            <div class="form group-row">
                <input placeholder="player_id" type="text" name="player_id" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="player_name" type="text" name="player_name" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="position" type="text" name="position" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="nationality" type="text" name="nationality" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="club_id" type="text" name="club_id" class="form-control col-sm-4" required>
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

<?php include "admin_footer.php"; ?>

<?php

    $player_id = $_POST["player_id"];
    $player_name = $_POST["player_name"];
    $position = $_POST["position"];
    $nationality = $_POST["nationality"];
    $club_id = $_POST["club_id"];
    $season_id = "s18";

    $qry = " SET FOREIGN_KEY_CHECKS = 0 ";
    $qry1 = " INSERT INTO players(player_id, player_name, position, nationality, club_id, season_id) VALUES ('".$player_id."' , '".$player_name."' , '".$position."', '".$nationality."' , '".$club_id."', '".$season_id."') ";
    $qry2 = " SET FOREIGN_KEY_CHECKS = 1 ";

    if($con->query($qry))
    {
        echo "Foreign key set = 0";
        if($con->query($qry1)) //if data is inserted
        {
            $msg = "Data inserted";
            if($con->query($qry2))
            {   
                echo "Foreign key set = 1";
                header("Location:admin_players.php?");
            }
        }
        else
        {
            echo "data not inserted";
        }
        
    }
    else
    {
        echo "not ok";
    }

?>

