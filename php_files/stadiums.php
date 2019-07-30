<?php include "header.php";
include "connect.php";
?>
<html>
<head>
    <title> Stadiums </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_clubs.css">

</head>

<head>
<body>
<center><h1>STADIUMS</h1></center>    

<div class="container" >
<?php
$qry="select stadium_name,capacity,location,built,pitch_size, club_name from clubs,stadiums where clubs.stadium_id=stadiums.stadium_id";
$res = $con->query($qry);
$result = "";
if($res->num_rows > 0)
{
    
    $result .= " <div class = 'container'> ";
    $result .= "<table class='table table-borderless'>";

    $result .= " <thead class='thead_clubs thead-dark'> <tr> 
        <th>Stadium name</th>  
         
        <th>Club name</th> 
        <th>Capacity</th>
        <th>Location</th>
        <th>Built</th>
        <th>Pitch size</th>
        </tr> </thead> ";
        while($row = $res->fetch_assoc())
        {
            $result .= " <tbody> <tr>
            
            
                <td> ".$row['stadium_name']." </td>
            
                
                <td> ".$row['club_name']." </td>
                <td> ".$row['capacity']." </td>
                <td> ".$row['location']." </td>
                <td> ".$row['built']." </td>
                <td> ".$row['pitch_size']." </td>
                

            </tr> </tbody> ";
        }

        $result .= " </table> </div> ";





}

echo $result;










?>
</div>










</body>
</head>
</html>
<?php include "footer.php"; ?>