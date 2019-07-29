<?php 
    include "admin_header.php";
    include "../connect.php";
    session_start();
?>

<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Admin | Managers </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_players.css">

</head>
<body>

    <center><h1> Add, Update AND Delete Managers</h1></center>
    <center><div class="container">
        <div class="row">
            <div class="col-6"><a href="add_manager.php"><button class="btn btn-info btn-lg btn_add">Add New</button></a></div>
            <div class="col-6"><a href="del_manager.php"><button class="btn btn-info btn-lg btn_del">Delete manager</button></a></div>
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

            $qry = " SELECT * FROM managers WHERE season_id='".$season_id."' ";
            $res = $con->query($qry);
            $result = "";

            if($res->num_rows > 0)
            {   
                $result .= " <div class = 'container'> ";
                $result .= " <table class='table table-bordered'> ";

                $result .= " <thead class='thead_clubs'> <tr> 
                    <th>manager id</th> 
                    <th>manager name</th>  
                    <th>nationality</th> 
                    <th>club id</th> 
                    <th> Action </th>
                    </tr> </thead> ";

                while($row = $res->fetch_assoc())
                {
                    $result .= " <tbody> <tr>
                    
                        <td> ".$row['manager_id']." </td>
                        <td> ".$row['manager_name']." </td>
                        <td> ".$row['nationality']." </td>
                        <td> ".$row['club_id']." </td>
                        <td> <a href='edit_manager.php?edit=".$row['manager_id']."'><button class='btn btn-info btn-block'>edit</button></a> </td>

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