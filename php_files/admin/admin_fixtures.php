<?php 
    include "admin_header.php";
    include "../connect.php";
    session_start();
?>

<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Admin | Fixtures </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_players.css">

</head>
<body>

    <center><h1> Keep fixtures up to date</h1></center>
    <center><div class="container">
        <div class="row">
            <div class="col-6"><a href="add_fixture.php"><button class="btn btn-info btn-lg btn_add">Add New fixture</button></a></div>
            <div class="col-6"><a href="del_fixture.php"><button class="btn btn-info btn-lg btn_del">Delete fixture</button></a></div>
        </div>
    </div></center>

    <hr>

    
    <br>
    <center>
    <div class="container">
        <?php

            $qry = " SELECT * FROM fixtures ";
            $res = $con->query($qry);
            $result = "";

            if($res->num_rows > 0)
            {   
                $result .= " <div class = 'container'> ";
                $result .= " <table class='table table-bordered'> ";

                $result .= " <thead class='thead_clubs'> <tr> 
                    <th>match_id</th>
                    <th>club_id1</th> 
                    <th>club_id2</th>  
                    <th>m_time</th> 
                    <th>m_date</th> 
                    <th>stadium_id</th>
                    <th> Action </th>
                    </tr> </thead> ";

                while($row = $res->fetch_assoc())
                {
                    $result .= " <tbody> <tr>
                    
                        <td> ".$row['m_id']." </td>
                        <td> ".$row['club_id1']." </td>
                        <td> ".$row['club_id2']." </td>
                        <td> ".$row['m_time']." </td>
                        <td> ".$row['m_date']." </td>
                        <td> ".$row['stadium_id']." </td>
                        <td> <a href='edit_fixture.php?edit=".$row['m_id']." '><button class='btn btn-info btn-block'>edit</button></a> </td>

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