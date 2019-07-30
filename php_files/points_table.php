<?php include "header.php";
include "connect.php";
?>
<html>
<head>
    <title> Points Table </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_clubs.css">

</head>

<body>
    <center><h1>POINTS-TABLE</h1></center>

    <div class="container" >
        <?php
            $qry="select club_name,played,won,drawn, lost,gf,ga,gd, points from clubs,points_table where clubs.club_id=points_table.club_id order by points desc";
            $res = $con->query($qry);
            $result = "";
            if($res->num_rows > 0)
            {
                
                $result .= " <div class = 'container'> ";
                $result .= "<table class='table table-borderless'>";

                $result .= " <thead class='thead_clubs thead-dark'> <tr> 
                    <th>club name</th>  
                     
                    <th>played</th>
                    <th>won</th>
                    <th>drawn</th>
                    <th>lost</th>
                    <th>gf</th>
                    <th>ga</th>
                    <th>gd</th> 
                    <th>points</th>
                    </tr> </thead> ";
                    while($row = $res->fetch_assoc())
                    {
                        $result .= " <tbody> <tr>
                            <td> ".$row['club_name']." </td>
                            <td> ".$row['played']." </td>
                            <td> ".$row['won']." </td>
                            <td> ".$row['drawn']." </td>
                            <td> ".$row['lost']." </td>
                            <td> ".$row['gf']." </td>
                            <td> ".$row['ga']." </td>
                            <td> ".$row['gd']." </td>
                            <td> ".$row['points']." </td>
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