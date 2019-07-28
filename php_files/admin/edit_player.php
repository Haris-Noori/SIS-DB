<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();


    

    if(isset($_GET['edit']))
    {
        $player_id = $_GET['edit'];
        $qry = " SELECT * FROM players WHERE player_id = '".$player_id."' ";
        $res = $con->query($qry);

        if($res->num_rows > 0)
        { 
            while($row = $res->fetch_assoc() )
            {
                $player_id   = $row["player_id"];
                $player_name = $row["player_name"];
                $position   = $row["position"];
                $nationality = $row["nationality"];
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

    <center><h1>Change and update the player's informtion</h1></center>
    <hr width="600px">

    <center>
    <div class="container">
        <form action="" method="post">

            <div class="form group-row">
                Player Name<input placeholder="player_name" type="text" name="player_new_name" value="<?php echo "$player_name" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Position<input placeholder="position" type="text" name="new_position" value="<?php echo "$position" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Nationality<input placeholder="nationality" type="text" name="new_nationality" value="<?php echo "$nationality" ; ?>" class="form-control col-sm-4" required>
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

    $player_new_name = $_POST["player_new_name"];
    $new_position = $_POST["new_position"];
    $new_nationality      = $_POST["new_nationality"];

    $qry2 = " UPDATE players SET player_name='".$player_new_name."', position='".$new_position."', nationality='".$new_nationality."' WHERE player_id='".$player_id."'  ";

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



