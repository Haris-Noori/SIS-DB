<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();

?>

<html>
<head>
    <title>Admin | Managers </title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/add_club.css"> -->
    <link rel="stylesheet" type="text/css" href="../../css/del_manager.css">
    

</head>
<body>

    <center><h2>Delete the Manager if he leaves the Premier League</h2></center>
    <hr>

    <center><div class="container">
        <form action="" method="post">

            <div class="form group-row">
                <input placeholder="Manager ID to delete" type="text" name="manager_id" class="form-control col-sm-4" >
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

    $manager_id = $_POST["manager_id"];

    //$qry = " SET FOREIGN_KEY_CHECKS = 0 ";
    $qry1 = " DELETE FROM managers WHERE manager_id='".$manager_id."' ";
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

