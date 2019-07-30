<?php include "header.php";
include "connect.php";
?>
<html>
<head>
    <title> Team Stats </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_clubs.css">

</head>

<body>
    <br>
    <center><h1>Team Stats in League History</h1></center>    

    <div class="container" >
        <?php
            $qry="select club_name, pl_titles, wins, losses, goals, yellow_cards, red_cards, goals_conceded, clean_sheets from clubs, team_stats
                where clubs.club_id=team_stats.club_id order by pl_titles desc ";
            $res = $con->query($qry);
            $result = "";
            if($res->num_rows > 0)
            {
                
                $result .= " <div class = 'container'> ";
                $result .= "<table class='table table-borderless'>";

                $result .= " <thead class='thead_clubs thead-dark'> <tr> 
                    <th>Club</th>    
                    <th>PL Titles</th> 
                    <th>Wins</th>
                    <th>Losses</th>
                    <th>Goals</th>
                    <th>Yellow Cards</th>
                    <th>Red Cards</th>
                    <th>Goals Conceded</th>
                    <th>Clean Sheets</th>       
                    </tr> </thead> ";
                    while($row = $res->fetch_assoc())
                    {
                        $result .= " <tbody> <tr>
                        
                        
                            <td> ".$row['club_name']." </td>
                            <td> ".$row['pl_titles']." </td>
                            <td> ".$row['wins']." </td>
                            <td> ".$row['losses']." </td>
                            <td> ".$row['goals']." </td>
                            <td> ".$row['yellow_cards']." </td>
                            <td> ".$row['red_cards']." </td>
                            <td> ".$row['goals_conceded']." </td>
                            <td> ".$row['clean_sheets']." </td>
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