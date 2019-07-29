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

    <center><h2>Only delete the stadium, if a club leaves the League</h2></center>
    <hr>

    <center><div class="container">
        <form action="" method="post">

            <div class="form group-row">
                <input placeholder="Stadium ID to delete" type="text" name="stadium_id" class="form-control col-sm-4" required>
            </div>
            <br>
            <!-- submit button -->
            <div class="form group-row">
                <button type="submit" class="col-sm-4 btn btn-info btn-block">Delete</button>
            </div>
            <br>

        </form>
    </div></center>



    

    <br>
</body>
</html>

<?php include "admin_footer.php"; ?>

<?php

    $stadium_id = $_POST["stadium_id"];

    //$qry = " SET FOREIGN_KEY_CHECKS = 0 ";
    $qry1 = " DELETE FROM stadiums WHERE stadium_id='".$stadium_id."' ";
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

