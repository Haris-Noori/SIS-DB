<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();

?>

<html>
<head>
    <title>Admin | Stadiums </title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/add_club.css"> -->
    <link rel="stylesheet" type="text/css" href="../../css/add_club.css">
    

</head>
<body>

    <center><h2>Add a new Stadium information, if a new club added</h2></center>
    <hr>

    <center><div class="container">
        <form action="" method="post">

            <div class="form group-row">
                <input placeholder="stadium_id" type="text" name="stadium_id" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="stadium_name" type="text" name="stadium_name" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="capacity" type="number" name="capacity" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="location" type="text" name="location" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="built" type="number" name="built" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="pitch_size" type="text" name="pitch_size" class="form-control col-sm-4" required>
            </div>
            <br>
            <!-- submit button -->
            <div class="form group-row">
                <button type="submit" class="col-sm-4 btn btn-info btn-block"> Add</button>
            </div>
            <br>

        </form>
    </div></center>



    <br>
</body>
</html>

<?php include "admin_footer.php"; ?>

<?php

    $stadium_id   = $_POST["stadium_id"];
    $stadium_name = $_POST["stadium_name"];
    $capacity     = $_POST["capacity"];
    $location     = $_POST["location"];
    $built        = $_POST["built"];
    $pitch_size    = $_POST["pitch_size"];

    $qry = " SET FOREIGN_KEY_CHECKS = 0 ";
    $qry1 = " INSERT INTO stadiums(stadium_id, stadium_name, capacity, location, built, pitch_size) VALUES ('".$stadium_id."' , '".$stadium_name."' , '".$capacity."', '".$location."' , '".$built."', '".$pitch_size."') ";
    $qry2 = " SET FOREIGN_KEY_CHECKS = 1 ";

    if($con->query($qry))
    {
        echo "Foreign key set = 0 ";
        if($con->query($qry1)) //if data is inserted
        {
            echo " Data inserted";

            if($con->query($qry2))
            {   
                echo " Foreign key set = 1";
                // header("Location:admin_players.php?");
            }
        }
        else
        {
            echo " data not inserted";
        }
        
    }
    else
    {
        echo "Query 1 is not ok";
    }

?>

