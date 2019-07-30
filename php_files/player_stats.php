<?php 
    include "header.php";
    include "connect.php";
?>

<html>
<head>
    <title> PLAYER STATS </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_clubs.css">

</head>

<body>

    <center><h2>Top Scorers of this Season</h2></center>    
    <div class="container" >
        <?php
            $qry=" select player_name,club_name,goals_scored,assists 
            from clubs,players,player_stats 
            where clubs.club_id=player_stats.club_id and players.player_id=player_stats.player_id
            order by goals_scored desc ";
            $res = $con->query($qry);
            $result = "";
            if($res->num_rows > 0)
            {
                
                $result .= " <div class = 'container'> ";
                $result .= "<table class='table table-borderless'>";

                $result .= " <thead class='thead_clubs  thead-dark'> <tr> 
                   
                     
                    <th>Player Name</th> 
                    <th>Club</th>
                    <th>Goals</th>
                    <th>Assists</th> 
                    </tr> </thead> ";
                    while($row = $res->fetch_assoc())
                    {
                        $result .= " <tbody> <tr>
                        
                            <td> ".$row['player_name']." </td>    
                            <td> ".$row['club_name']." </td>
                            <td> ".$row['goals_scored']." </td>
                            <td> ".$row['assists']." </td>
                            
                        </tr> </tbody> ";
                    }

                    $result .= " </table> </div> ";

            }

            echo $result;

        ?>
    </div>

    <br>
    <br>

    <center><h2>Top Goalkeepers of this Season</h2></center>    
    <div class="container" >
        <?php
            $qry=" select player_name,club_name, c_sheets 
            from clubs,players,clean_sheets 
            where clubs.club_id=clean_sheets.club_id and players.player_id=clean_sheets.player_id
            order by c_sheets desc ";
            $res = $con->query($qry);
            $result = "";

            if($res->num_rows > 0)
            {
                
                $result .= " <div class = 'container'> ";
                $result .= "<table class='table table-borderless'>";

                $result .= " <thead class='thead_clubs  thead-dark'> <tr> 
                   
                    <th>Player Name</th> 
                    <th>Club</th>
                    <th>Clean Sheets</th> 
                    </tr> </thead> ";
                    while($row = $res->fetch_assoc())
                    {
                        $result .= " <tbody> <tr>
                        
                            <td> ".$row['player_name']." </td>    
                            <td> ".$row['club_name']." </td>
                            <td> ".$row['c_sheets']." </td>
                            
                        </tr> </tbody> ";
                    }

                    $result .= " </table> </div> ";

            }

            echo $result;

        ?>
    </div>

</body>
</html>
<?php include "footer.php"; ?>