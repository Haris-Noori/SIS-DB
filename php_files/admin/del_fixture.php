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

    <center><h2>Delete fixtures!!</h2></center>
    <hr>

    <center><div class="container">
        <form action="" method="post">

            <div class="form group-row">
                <input placeholder="Match ID to delete" type="text" name="m_id" class="form-control col-sm-4">
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

    $m_id = $_POST["m_id"];

    $qry1 = " DELETE FROM fixtures WHERE m_id='".$m_id."' ";

    if($con->query($qry1))
    {
        echo "<script>alert('Data Deleted Successfully')</script>";
    }
    else
    {
        echo "Query not working";
    }


?>

