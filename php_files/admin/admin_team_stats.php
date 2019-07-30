<?php 
    include "admin_header.php";
    include "../connect.php";
    session_start();
?>

<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Admin | Team Stats </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_points.css">

</head>
<body>

    <center><h1>Update stats of teams, after the season ends</h1></center>

    <hr>

    
    <br>
    <center>
    <div class="container">
        <?php

            $qry = " SELECT * FROM team_stats ORDER BY wins DESC ";
            $res = $con->query($qry);
            $result = "";

            if($res->num_rows > 0)
            {   
                $result .= " <div class = 'container'> ";
                $result .= " <table class='table table-bordered'> ";

                $result .= " <thead class='thead_clubs'> <tr> 
                    <th>club_id</th> 
                    <th>wins</th> 
                    <th>losses</th> 
                    <th>goals</th> 
                    <th>yellow_cards</th>
                    <th>red_cards</th>
                    <th>goals_conceded</th>
                    <th>clean_sheets</th> 
                    <th> Action </th>
                    </tr> </thead> ";

                while($row = $res->fetch_assoc())
                {
                    $result .= " <tbody> <tr>
                    
                        <td> ".$row['club_id']." </td>
                        <td> ".$row['wins']." </td>
                        <td> ".$row['losses']." </td>
                        <td> ".$row['goals']." </td>
                        <td> ".$row['yellow_cards']." </td>
                        <td> ".$row['red_cards']." </td>
                        <td> ".$row['goals_conceded']." </td>
                        <td> ".$row['clean_sheets']." </td>
                        <td> <a href='edit_team_stats.php?edit=".$row['club_id']."'><button class='btn btn-info btn-block'>edit</button></a> </td>

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