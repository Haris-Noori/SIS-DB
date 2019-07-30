<?php include "admin_header.php"; 
    session_start();

    $user = $_SESSION["user"];
    
    // $qry = " SELECT password FROM admins WHERE username='".$user."' ";

    // $res = $con->query($qry);

    //     if($res->num_rows > 0)
    //     { 
    //         while($row = $res->fetch_assoc() )
    //         {
    //             $pass = $row["password"];
    //         }    
    //     }

?>


<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Admin | Dashboard</title>

    <link rel="stylesheet" type="text/css" href="../../css/admin_dashboard.css">
</head>
<body>


    <center>
        <h2>Change Password</h2>
        <hr>

        <div class="container">
        <!-- form -->
            <form action="" method="post">

                <div class="form group-row">
                    <input placeholder="New Password" type="password" name="new_pass" class="form-control col-sm-4" required>
                </div>
                <br>
                <div class="form group-row">
                    <input type="submit" class="form-control col-sm-4 btn btn-info">
                </div>
                <br>
                
            </form>

        </div>

        
    
    </center>
    <br>
    
</body>
</html>
<?php include "admin_footer.php"; ?>

<?php

        $new_pass = $_POST["new_pass"];
        $qry2 = " UPDATE admins SET password='".$new_pass."' WHERE username='".$user."' ";

        if($con->query($qry2))
        {
            echo "<script>alert('Password changed')</script>";
        }
        else
        {
            echo "Not changed";
        }

?>


