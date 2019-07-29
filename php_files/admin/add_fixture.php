<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();

?>

<html>
<head>
    <title>Admin | Fixtures </title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/add_club.css"> -->
    <link rel="stylesheet" type="text/css" href="../../css/add_club.css">
    

</head>
<body>

    <center><h2>Add new fixture</h2></center>
    <hr>

    <center><div class="container">
        <form action="" method="post">

            <div class="form group-row">
                <input placeholder="m_id" type="text" name="m_id" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="club_id1" type="text" name="club_id1" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="club_id2" type="text" name="club_id2" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="m_time" type="text" name="m_time" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="m_date" type="date" name="m_date" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="stadium_id" type="text" name="stadium_id" class="form-control col-sm-4" required>
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

    $m_id       = $_POST["m_id"];
    $club_id1   = $_POST["club_id1"];
    $club_id2   = $_POST["club_id2"];
    $m_time     = $_POST["m_time"];
    $m_date     = $_POST["m_date"];
    $stadium_id = $_POST["stadium_id"];

    $qry = " SET FOREIGN_KEY_CHECKS = 0 ";
    $qry1 = " INSERT INTO fixtures(m_id, club_id1, club_id2, m_time, m_date, stadium_id) VALUES ('".$m_id."' , '".$club_id1."', '".$club_id2."', '".$m_time."', '".$m_date."', '".$stadium_id."') ";
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
