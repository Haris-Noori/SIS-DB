<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();


    

    if(isset($_GET['edit']))
    {
        $player_id = $_GET['edit'];
        $qry = " SELECT * FROM player_stats WHERE player_id = '".$player_id."' ";
        $res = $con->query($qry);

        if($res->num_rows > 0)
        { 
            while($row = $res->fetch_assoc() )
            {
                $player_id        = $row["player_id"];
                $goals_scored         = $row["goals_scored"];
                $assists          = $row["assists"];
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
                Goals<input placeholder="goals_scored" type="number" name="new_goals_scored" value="<?php echo "$goals_scored" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Assists<input placeholder="assists" type="number" name="new_assists" value="<?php echo "$assists" ; ?>" class="form-control col-sm-4" required>
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
    $new_goals_scored = $_POST["new_goals_scored"];
    $new_assists = $_POST["new_assists"];


    $qry2 = " UPDATE player_stats 
    SET goals_scored='".$new_goals_scored."', assists='".$new_assists."'
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



