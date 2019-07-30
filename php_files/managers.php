<?php include "header.php";
include "connect.php";
?>
<html>
<head>
    <title> Managers </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_clubs.css">

</head>

<head>
<body>
<center><h1>MANAGERS</h1></center>    

<div class="container" >
<?php
$qry="select club_name,manager_name,nationality from clubs,managers where clubs.club_id=managers.club_id";
$res = $con->query($qry);
$result = "";
if($res->num_rows > 0)
{
    
    $result .= " <div class = 'container'> ";
    $result .= "<table class='table table-borderless'>";

    $result .= " <thead class='thead_clubs thead-dark'> <tr> 
        <th>Manager name</th>  
         
        <th>Club name</th> 
        <th>Nationality</th> 
        </tr> </thead> ";
        while($row = $res->fetch_assoc())
        {
            $result .= " <tbody> <tr>
            
            
                <td> ".$row['manager_name']." </td>
            
                
                <td> ".$row['club_name']." </td>
                <td> ".$row['nationality']." </td>
                

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