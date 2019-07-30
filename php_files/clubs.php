<?php include "header.php";
    include "connect.php";
?>

<html>
<head>
    <title> Clubs </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_clubs.css">

</head>
<body>

    <center><h1>ALL-TIME PREMIER LEAGUE CLUBS</h1></center>

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
            $qry="select club_name,stadium_name from clubs,stadiums where clubs.stadium_id=stadiums.stadium_id";
            $res = $con->query($qry);
            $result = "";
            if($res->num_rows > 0)
            {
                
                $result .= " <div class = 'container'> ";
                $result .= "<table class='table table-borderless'>";

                $result .= " <thead class='thead_clubs thead-dark'> <tr> 
                    <th>Club name</th>  
                     
                    <th>Stadium name</th> 

                    </tr> </thead> ";
                    while($row = $res->fetch_assoc())
                    {
                        $result .= " <tbody> <tr>
                        
                        
                            <td> ".$row['club_name']." </td>
                        
                            
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