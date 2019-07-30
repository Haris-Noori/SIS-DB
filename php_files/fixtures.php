<?php include "header.php";
include "connect.php";
?>
<html>
<head>
    <title> Fixtures </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_clubs.css">

</head>
<body>
    <center><h1>Fixtures Season 2018/19</h1></center>

    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <!-- Navbar content -->
 
  
    <a class="navbar-brand-Black-12"></a>
        <form class="form-inline my-1 my-lg-1">
        <input class="form-control mr-sm-0" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-0 my-sm-0" type="submit">Search</button>
      </form>
    </nav>

    <div class="container" >
        <?php
            $qry=" SELECT club_id1, club_id2, m_time, m_date, stadium_name 
            FROM fixtures, stadiums
            WHERE fixtures.stadium_id = stadiums.stadium_id ";

            $res = $con->query($qry);
            $result = "";
            if($res->num_rows > 0)
            {
                
                $result .= " <div class = 'container'> ";
                $result .= "<table class='table table-borderless'>";

                $result .= " <thead class='thead_clubs thead-dark'> <tr> 
                    <th>Club</th>  
                    <th>Club</th>
                    <th>Time</th> 
                    <th>Date</th> 
                    <th>Stadium</th> 
                    </tr> </thead> ";
                    while($row = $res->fetch_assoc())
                    {

                        $result .= " 

                            <td> ".$row['club_id1']." </td>
                            <td> ".$row['club_id2']." </td>
                            <td> ".$row['m_time']." </td>
                            <td> ".$row['m_date']." </td>
                            <td> ".$row['stadium_name']." </td>
                    
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