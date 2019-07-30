<?php 
    include "admin_header.php";
    include "../connect.php";
    session_start();
?>

<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Admin | Player Stats </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_points.css">

</head>
<body>

    <center><h1>Update stats of top scorers and Goalkeepers</h1></center>

    <hr>

    <!-- TOP SCORERS -->
    <br>
    <center>
    <h3> Top Scorers </h3>
    <div class="container">
        <?php

            $qry = " SELECT * FROM player_stats ORDER BY goals_scored DESC ";
            $res = $con->query($qry);
            $result = "";

            if($res->num_rows > 0)
            {   
                $result .= " <div class = 'container'> ";
                $result .= " <table class='table table-bordered'> ";

                $result .= " <thead class='thead_clubs'> <tr> 
                    <th>player id</th> 
                    <th>club id</th> 
                    <th>goals scored</th> 
                    <th>assists</th> 
                    <th> Action </th>
                    </tr> </thead> ";

                while($row = $res->fetch_assoc())
                {
                    $result .= " <tbody> <tr>
                    
                        <td> ".$row['player_id']." </td>
                        <td> ".$row['club_id']." </td>
                        <td> ".$row['goals_scored']." </td>
                        <td> ".$row['assists']." </td>
                        <td> <a href='edit_player_stats.php?edit=".$row['player_id']."'><button class='btn btn-info btn-block'>edit</button></a> </td>

                    </tr> </tbody> ";
                }

                $result .= " </table> </div> ";
            }

            echo $result;

        ?>
    </div>
    </center>

    <!-- TOP GOALKEEPERS -->
    <br>
    <center>
    <h3> Top GoalKeepers </h3>
    <div class="container">
        <?php

            $qry = " SELECT * FROM clean_sheets ORDER BY c_sheets DESC ";
            $res = $con->query($qry);
            $result = "";

            if($res->num_rows > 0)
            {   
                $result .= " <div class = 'container'> ";
                $result .= " <table class='table table-bordered'> ";

                $result .= " <thead class='thead_clubs'> <tr> 
                    <th>player id</th> 
                    <th>club id</th> 
                    <th>clean sheets</th>  
                    <th> Action </th>
                    </tr> </thead> ";

                while($row = $res->fetch_assoc())
                {
                    $result .= " <tbody> <tr>
                    
                        <td> ".$row['player_id']." </td>
                        <td> ".$row['club_id']." </td>
                        <td> ".$row['c_sheets']." </td>
                        <td> <a href='edit_keepers.php?edit=".$row['player_id']."'><button class='btn btn-info btn-block'>edit</button></a> </td>

                    </tr> </tbody> ";
                }

                $result .= " </table> </div> ";
            }

            echo $result;

        ?>
    </div>
    </center>

    <br>
</body>
</html>

<?php include "admin_footer.php"; ?>