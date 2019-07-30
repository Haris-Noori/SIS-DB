<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();


    

    if(isset($_GET['edit']))
    {
        $player_id = $_GET['edit'];
        $qry = " SELECT * FROM clean_sheets WHERE player_id = '".$player_id."' ";
        $res = $con->query($qry);

        if($res->num_rows > 0)
        { 
            while($row = $res->fetch_assoc() )
            {
                $player_id = $row["player_id"];
                $c_sheets   = $row["c_sheets"];
            }    
        }
        
    }

?>


<html>
<head>
    <title>Admin | Team Stats </title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/add_club.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../../css/add_club.css"> -->
    

</head>
<body>
    <br>

    <center><h1>Update stats after every match</h1></center>
    <hr width="600px">

    <center>
    <div class="container">
        <form action="" method="post">

            <div class="form group-row">
                Player ID<input placeholder="player_id" type="text" name="new_player_id" value="<?php echo "$player_id" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Clean Sheets<input placeholder="clean_sheets" type="number" name="new_c_sheets" value="<?php echo "$c_sheets" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <!-- submit button -->
            <div class="form group-row">
                <button type="submit" class="btn btn-info col-sm-4">Update</button> 
            </div>
            <br>
            

        </form>
    </div></center>


    <br>
</body>
</html>

<?php include "admin_footer.php"; ?>

<?php

    
    $new_player_id = $_POST["new_player_id"];
    $new_c_sheets = $_POST["new_c_sheets"];


    $qry2 = " UPDATE clean_sheets 
    SET c_sheets='".$new_c_sheets."'
    WHERE player_id='".$player_id."'  ";

    if($con->query($qry2))
    {
        echo "<script>alert('Table updated')</script>";
        // header("Location:admin_clubs.php");
        
    }
    else
    {
        echo "<script> alert('Not Updated') </script>";
    }


?>



