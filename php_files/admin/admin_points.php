<?php 
    include "admin_header.php";
    include "../connect.php";
    session_start();
?>

<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Admin | Points Table </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_players.css">

</head>
<body>

    <center><h1>Update table points, and stats asap!!</h1></center>
    <center><div class="container">
        <div class="row">
            <div class="col-6"><a href="add_points.php"><button class="btn btn-info btn-lg btn_add">Add new club stat</button></a></div>
            <div class="col-6"><a href="del_points.php"><button class="btn btn-info btn-lg btn_del">Delete Club stat</button></a></div>
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

            $qry = " SELECT * FROM points_table WHERE season_id='".$season_id."' ORDER BY points DESC ";
            $res = $con->query($qry);
            $result = "";

            if($res->num_rows > 0)
            {   
                $result .= " <div class = 'container'> ";
                $result .= " <table class='table table-bordered'> ";

                $result .= " <thead class='thead_clubs'> <tr> 
                    <th>club_id</th> 
                    <th>played</th> 
                    <th>won</th> 
                    <th>drawn</th> 
                    <th>lost</th>
                    <th>gf</th>
                    <th>ga</th>
                    <th>gd</th>
                    <th>points</th> 
                    <th> Action </th>
                    </tr> </thead> ";

                while($row = $res->fetch_assoc())
                {
                    $result .= " <tbody> <tr>
                    
                        <td> ".$row['club_id']." </td>
                        <td> ".$row['played']." </td>
                        <td> ".$row['won']." </td>
                        <td> ".$row['drawn']." </td>
                        <td> ".$row['lost']." </td>
                        <td> ".$row['gf']." </td>
                        <td> ".$row['ga']." </td>
                        <td> ".$row['gd']." </td>
                        <td> ".$row['points']." </td>
                        <td> <a href='edit_points.php?edit=".$row['club_id']."'><button class='btn btn-info btn-block'>edit</button></a> </td>

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