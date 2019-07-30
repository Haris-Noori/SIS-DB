<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();

?>

<html>
<head>
    <title>Admin | Users </title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/add_club.css"> -->
    <link rel="stylesheet" type="text/css" href="../../css/add_club.css">
    

</head>
<body>

    <center><h2>Delete the user</h2></center>
    <hr>

    <center><div class="container">
        <form action="" method="post">

            <div class="form group-row">
                <input placeholder="User ID to delete" type="text" name="user_id" class="form-control col-sm-4">
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

    $user_id = $_POST["user_id"];

    $qry1 = " DELETE FROM users WHERE user_id='".$user_id."' ";

    if($con->query($qry1))
    {
        echo "<script>alert('Data Deleted Successfully')</script>";
    }
    else
    {
        echo "Query not working";
    }


?>

