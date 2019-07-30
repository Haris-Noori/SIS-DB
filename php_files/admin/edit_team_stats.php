<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();


    

    if(isset($_GET['edit']))
    {
        $club_id = $_GET['edit'];
        $qry = " SELECT * FROM team_stats WHERE club_id = '".$club_id."' ";
        $res = $con->query($qry);

        if($res->num_rows > 0)
        { 
            while($row = $res->fetch_assoc() )
            {
                $club_id        = $row["club_id"];
                $wins           = $row["wins"];
                $losses         = $row["losses"];
                $goals          = $row["goals"];
                $yellow_cards   = $row["yellow_cards"];
                $red_cards      = $row["red_cards"];
                $goals_conceded = $row["goals_conceded"];
                $clean_sheets   = $row["clean_sheets"];
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
                Wins<input placeholder="wins" type="number" name="new_wins" value="<?php echo "$wins" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Losses<input placeholder="losses" type="number" name="new_losses" value="<?php echo "$losses" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Goals<input placeholder="goals" type="number" name="new_goals" value="<?php echo "$goals" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Yellow Cards<input placeholder="yellow_cards" type="number" name="new_yellow_cards" value="<?php echo "$yellow_cards" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Red Cards<input placeholder="red_cards" type="number" name="new_red_cards" value="<?php echo "$red_cards" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Goals Conceded<input placeholder="goals_conceded" type="number" name="new_goals_conceded" value="<?php echo "$goals_conceded" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Clean Sheets<input placeholder="clean_sheets" type="number" name="new_clean_sheets" value="<?php echo "$clean_sheets" ; ?>" class="form-control col-sm-4" required>
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

    
    $new_wins = $_POST["new_wins"];
    $new_losses = $_POST["new_losses"];
    $new_goals = $_POST["new_goals"];
    $new_yellow_cards = $_POST["new_yellow_cards"];
    $new_red_cards = $_POST["new_red_cards"];
    $new_goals_conceded = $_POST["new_goals_conceded"];
    $new_clean_sheets = $_POST["new_clean_sheets"];


    $qry2 = " UPDATE team_stats SET wins='".$new_wins."', losses='".$new_losses."', goals='".$new_goals."', yellow_cards='".$new_yellow_cards."', 
    red_cards='".$new_red_cards."' , goals_conceded='".$new_goals_conceded."' , clean_sheets='".$new_clean_sheets."'
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



