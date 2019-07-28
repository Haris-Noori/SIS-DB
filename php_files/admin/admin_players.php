<?php 
    include "admin_header.php";
    include "../connect.php";
    session_start();
?>

<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Admin | Players </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_players.css">

</head>
<body>

    <center><h1> Add, Update AND Delete Players</h1></center>
    <center><div class="container">
        <div class="row">
            <div class="col-6"><a href="add_player.php"><button class="btn btn-info btn-lg btn_add">Add New</button></a></div>
            <div class="col-6"><a href="del_player.php"><button class="btn btn-info btn-lg btn_del">Delete Player</button></a></div>
        </div>
    </div></center>

    <hr>

    <center>
    <div class="container">
        <form action="" method="post">
        <div class="row">
            <div class="col-6"><button type="submit" name="s17" class="btn btn-info s_17">Season 2017/18</button></div>
            <div class="col-6"><button type="submit" name="s18" class="btn btn-info s_18">Season 2018/19</button></div>
        </div>
        </form> </center>
    </div>
    
    <br>
    <center>
    <div class="container">
        <?php
            if (isset($_POST['s17'])) {
                $season_id = "s17";
            }
            else
            {
                $season_id = "s18";
            }

            $qry = " SELECT * FROM players WHERE season_id='".$season_id."' ";
            $res = $con->query($qry);
            $result = "";

            if($res->num_rows > 0)
            {   
                $result .= " <div class = 'container'> ";
                $result .= " <table class='table table-bordered'> ";

                $result .= " <thead class='thead_clubs'> <tr> 
                    <th>player id</th> 
                    <th>player name</th> 
                    <th>position</th> 
                    <th>nationality</th> 
                    <th>club id</th> 
                    <th> Action </th>
                    </tr> </thead> ";

                while($row = $res->fetch_assoc())
                {
                    $result .= " <tbody> <tr>
                    
                        <td> ".$row['player_id']." </td>
                        <td> ".$row['player_name']." </td>
                        <td> ".$row['position']." </td>
                        <td> ".$row['nationality']." </td>
                        <td> ".$row['club_id']." </td>
                        <td> <a href='edit_player.php?edit=".$row['player_id']."'><button class='btn btn-info btn-block'>edit</button></a> </td>

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