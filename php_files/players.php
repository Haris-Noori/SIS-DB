<?php include "header.php";
include "connect.php";
?>
<html>
<head>
    <title> Players </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_clubs.css">

</head>
<body>
    <center><h1>ALL-TIME PREMIER LEAGUE PLAYERS</h1></center>

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
            $qry="select player_name,position, nationality, club_name from players,clubs where players.club_id=clubs.club_id";
            $res = $con->query($qry);
            $result = "";
            if($res->num_rows > 0)
            {
                
                $result .= " <div class = 'container'> ";
                $result .= "<table class='table table-borderless'>";

                $result .= " <thead class='thead_clubs thead-dark'> <tr> 
                    <th>Player</th>  
                    <th>Position</th>
                    <th>Nationality</th> 
                    <th>Club</th> 
                    </tr> </thead> ";
                    while($row = $res->fetch_assoc())
                    {
                        $result .= " <tbody> <tr>
                        
                        
                            <td> ".$row['player_name']." </td>
                            <td> ".$row['position']." </td>
                            <td> ".$row['nationality']." </td>
                            <td> ".$row['club_name']." </td>
                            
                            

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