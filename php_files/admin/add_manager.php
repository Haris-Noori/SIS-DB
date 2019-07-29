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

    <center><h2>Add a new Manager Information</h2></center>
    <hr>

    <center><div class="container">
        <form action="" method="post">

            <div class="form group-row">
                <input placeholder="manager_id" type="text" name="manager_id" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="manager_name" type="text" name="manager_name" class="form-control col-sm-4" required>
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

        </form>
    </div></center>



    <br>
</body>
</html>

<?php include "admin_footer.php"; ?>

<?php

    $manager_id = $_POST["manager_id"];
    $manager_name = $_POST["manager_name"];
    $nationality = $_POST["nationality"];
    $club_id = $_POST["club_id"];
    $season_id = "s18";

    $qry = " SET FOREIGN_KEY_CHECKS = 0 ";
    $qry1 = " INSERT INTO managers(manager_id, manager_name, nationality, club_id, season_id) VALUES ('".$manager_id."' , '".$manager_name."', '".$nationality."', '".$club_id."', '".$season_id."') ";
    $qry2 = " SET FOREIGN_KEY_CHECKS = 1 ";

    if($con->query($qry))
    {
        echo "Foreign key set = 0 ";
        if($con->query($qry1)) //if data is inserted
        {
            $msg = " Data inserted";
            if($con->query($qry2))
            {   
                echo " Foreign key set = 1";
                echo " Data inserted";
            }
        }
        else
        {
            echo " Data not inserted";
        }
        
    }
    else
    {
        echo " Query 1 is not ok";
    }

?>

