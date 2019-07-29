<?php 
    include "admin_header.php";
    include "../connect.php";
    session_start();
?>

<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Admin | Stadiums </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_players.css">

</head>
<body>

    <center><h1> Add, Update AND Delete Stadiums</h1></center>
    <center><div class="container">
        <div class="row">
            <div class="col-6"><a href="add_stadium.php"><button class="btn btn-info btn-lg btn_add">Add New</button></a></div>
            <div class="col-6"><a href="del_stadium.php"><button class="btn btn-info btn-lg btn_del">Delete Stadium</button></a></div>
        </div>
    </div></center>

    <hr>

    
    <br>
    <center>
    <div class="container">
        <?php

            $qry = " SELECT * FROM stadiums ";
            $res = $con->query($qry);
            $result = "";

            if($res->num_rows > 0)
            {   
                $result .= " <div class = 'container'> ";
                $result .= " <table class='table table-bordered'> ";

                $result .= " <thead class='thead_clubs'> <tr> 
                    <th>stadium id</th> 
                    <th>stadium name</th>  
                    <th>capacity</th> 
                    <th>location</th> 
                    <th>Built</th>
                    <th>Pitch size</th>
                    <th> Action </th>
                    </tr> </thead> ";

                while($row = $res->fetch_assoc())
                {
                    $result .= " <tbody> <tr>
                    
                        <td> ".$row['stadium_id']." </td>
                        <td> ".$row['stadium_name']." </td>
                        <td> ".$row['capacity']." </td>
                        <td> ".$row['location']." </td>
                        <td> ".$row['built']." </td>
                        <td> ".$row['pitch_size']." </td>
                        <td> <a href='edit_stadium.php?edit=".$row['stadium_id']."'><button class='btn btn-info btn-block'>edit</button></a> </td>

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