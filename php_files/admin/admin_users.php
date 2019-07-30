<?php 
    include "admin_header.php";
    include "../connect.php";
    session_start();
?>

<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Admin | Users </title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_users.css">

</head>
<body>

    <center><h1>Block or remove user subscription</h1></center>

    <hr>

    <!-- TOP SCORERS -->
    <br>
    <center>
    <h3>These users has subscribed for newsletter, like transfer news and other breaking news</h3>
    <div class="container">
        <?php

            $qry = " SELECT * FROM users ";
            $res = $con->query($qry);
            $result = "";

            if($res->num_rows > 0)
            {   
                $result .= " <div class = 'container'> ";
                $result .= " <table class='table table-bordered'> ";

                $result .= " <thead class='thead_clubs'> <tr> 
                    <th>user id</th> 
                    <th>user name</th>   
                    <th> Action </th>
                    </tr> </thead> ";

                while($row = $res->fetch_assoc())
                {
                    $result .= " <tbody> <tr>
                    
                        <td> ".$row['user_id']." </td>
                        <td> ".$row['username']." </td>
                        <td> <a href='edit_users.php?edit=".$row['user_id']."'><button class='btn btn-info btn-block'>Remove user</button></a> </td>

                    </tr> </tbody> ";
                }

                $result .= " </table> </div> ";
            }

            echo $result;

        ?>
    </div>

    <h4>subscription is not available now, page under maintenance⚙</h4>

    </center>


    <br>
</body>
</html>

<?php include "admin_footer.php"; ?>