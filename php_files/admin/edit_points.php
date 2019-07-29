<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();


    

    if(isset($_GET['edit']))
    {
        $club_id = $_GET['edit'];
        $qry = " SELECT * FROM points_table WHERE club_id = '".$club_id."' ";
        $res = $con->query($qry);

        if($res->num_rows > 0)
        { 
            while($row = $res->fetch_assoc() )
            {
                $club_id   = $row["club_id"];
                $played = $row["played"];
                $won   = $row["won"];
                $drawn   = $row["drawn"];
                $lost   = $row["lost"];
                $gf   = $row["gf"];
                $ga   = $row["ga"];
                $gd   = $row["gd"];
                $points   = $row["points"];
            }    
        }
        
    }

?>


<html>
<head>
    <title>Admin | Players </title>
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
                Played<input placeholder="played" type="number" name="new_played" value="<?php echo "$played" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Won<input placeholder="won" type="number" name="new_won" value="<?php echo "$won" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Drawn<input placeholder="drawn" type="number" name="new_drawn" value="<?php echo "$drawn" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Lost<input placeholder="lost" type="number" name="new_lost" value="<?php echo "$lost" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                GF<input placeholder="gf" type="number" name="new_gf" value="<?php echo "$gf" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                GA<input placeholder="ga" type="number" name="new_ga" value="<?php echo "$ga" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                GD<input placeholder="gd" type="number" name="new_gd" value="<?php echo "$gd" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Points<input placeholder="points" type="number" name="new_points" value="<?php echo "$points" ; ?>" class="form-control col-sm-4" required>
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

    
    $new_played = $_POST["new_played"];
    $new_won = $_POST["new_won"];
    $new_drawn = $_POST["new_drawn"];
    $new_lost = $_POST["new_lost"];
    $new_gf = $_POST["new_gf"];
    $new_ga = $_POST["new_ga"];
    $new_gd = $_POST["new_gd"];
    $new_points = $_POST["new_points"];

    

    $qry2 = " UPDATE points_table SET played='".$new_played."', won='".$new_won."', drawn='".$new_drawn."', lost='".$new_lost."', 
    gf='".$new_gf."' , ga='".$new_ga."' , gd='".$new_gd."' , points='".$new_points."'
    WHERE club_id='".$club_id."'  ";

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



