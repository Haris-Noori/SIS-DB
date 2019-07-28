<?php 
    include "admin_header.php";
    include "../connect.php";
    session_start();
?>

<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Admin | Clubs </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_clubs.css">

</head>
<body>

    <center><h1> Add New, Update AND Delete clubs</h1></center>
    <center><div class="container">
        <div class="row">
            <div class="col-6"><a href="add_club.php"><button class="btn btn-info btn-lg btn_add">Add New</button></a></div>
            <div class="col-6"><button class="btn btn-info btn-lg btn_del">Delete club</button></div>
        </div>
    </div></center>

    <hr>

    <center>
    <div class="container">
        <?php
            $qry = " SELECT * FROM clubs ";
            $res = $con->query($qry);
            $result = "";

            if($res->num_rows > 0)
            {   
                $result .= " <div class = 'container'> ";
                $result .= " <table class='table table-bordered'> ";

                $result .= " <thead class='thead_clubs'> <tr> 
                    <th>club id</th> <th>club name</th> 
                    <th>manager id</th> <th>PL titles</th> 
                    <th>stadium id</th> <th>rank</th> 
                    <th> Action </th>
                    </tr> </thead> ";

                while($row = $res->fetch_assoc())
                {
                    $result .= " <tbody> <tr>
                    
                        <td> ".$row['club_id']." </td>
                        <td> ".$row['club_name']." </td>
                        <td> ".$row['manager_id']." </td>
                        <td> ".$row['pl_titles']." </td>
                        <td> ".$row['stadium_id']." </td>
                        <td> ".$row['rank']." </td>
                        <td> <a href='edit_club.php?edit=".$row['club_id']."'><button class='btn btn-info btn-block'>edit</button></a> </td>

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