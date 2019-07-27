<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();

?>

<html>
<head>
    <title>Admin | Clubs </title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/add_club.css"> -->
    <link rel="stylesheet" type="text/css" href="../../css/add_club.css">
    

</head>
<body>

    <center><h2>After adding new club, you must update the stadium and manager table</h2></center>
    <hr>

    <center><div class="container">
        <form action="" method="post">

            <div class="form group-row">
                <input placeholder="club_id" type="text" name="club_id" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="club_name" type="text" name="club_name" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="manager_id" type="text" name="manager_id" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="pl_titles" type="number" name="pl_titles" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="stadium_id" type="text" name="stadium_id" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="rank in league" type="number" name="rank" class="form-control col-sm-4" required>
            </div>
            <br>
            <!-- submit button -->
            <div class="form group-row">
                <input type="submit" class="form-control col-sm-4 btn btn-info">
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

    $club_id = $_POST["club_id"];
    $club_name = $_POST["club_name"];
    $manager_id = $_POST["manager_id"];
    $pl_titles = $_POST["pl_titles"];
    $stadium_id = $_POST["stadium_id"];
    $rank = $_POST["rank"];

    $qry = " SET FOREIGN_KEY_CHECKS = 0 ";
    $qry1 = " INSERT INTO clubs VALUES ('".$club_id."' , '".$club_name."' , '".$manager_id."', '".$pl_titles."' , '".$stadium_id."' , '".$rank."') ";
    $qry2 = " SET FOREIGN_KEY_CHECKS = 1 ";

    if($con->query($qry))
    {
        //echo "Query is ok";
        if($con->query($qry1)) //if data is inserted
        {
            $msg = "Data inserted";
            if($con->query($qry2))
            {   
                echo "Foreign key set";
                header("Location:add_manager.php?");
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

