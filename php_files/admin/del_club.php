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

    <center><h2>Only delete club after the season ends</h2></center>
    <hr>

    <center><div class="container">
        <form action="" method="post">

            <div class="form group-row">
                <input placeholder="Club ID to delete" type="text" name="club_id" class="form-control col-sm-4">
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

    $club_id = $_POST["club_id"];

    $qry = " SET FOREIGN_KEY_CHECKS = 0 ";
    $qry1 = " DELETE FROM clubs WHERE club_id='".$club_id."' ";
    $qry2 = " SET FOREIGN_KEY_CHECKS = 1 ";

    if($con->query($qry))
    {
        //echo "Query is ok";
        if($con->query($qry1)) //if data is inserted
        {
            $msg = "Club Deleted";
            if($con->query($qry2))
            {   
                echo "Foreign key set 1";
                header("Location:add_club.php");
            }
        }
        else
        {
            echo "data not deleted";
        }
        
    }
    else
    {
        echo "FOREIGN KEY NOT SET 0";
    }

?>

