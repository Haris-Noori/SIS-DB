<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();


    

    if(isset($_GET['edit']))
    {
        $manager_id = $_GET['edit'];
        $qry = " SELECT * FROM managers WHERE manager_id = '".$manager_id."' ";
        $res = $con->query($qry);

        if($res->num_rows > 0)
        { 
            while($row = $res->fetch_assoc() )
            {
                $manager_id   = $row["manager_id"];
                $manager_name = $row["manager_name"];
                $nationality  = $row["nationality"];
                $club_id      = $row["club_id"];
            }    
        }
        
    }

?>


<html>
<head>
    <title>Admin | Players </title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/add_club.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../../css/add_club.css"> -->
    

</head>
<body>
    <br>

    <center><h1>Change and update the manager's informtion</h1></center>
    <hr width="600px">

    <center>
    <div class="container">
        <form action="" method="post">

            <div class="form group-row">
                Manager Name<input placeholder="manager_name" type="text" name="manager_new_name" value="<?php echo "$manager_name" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Nationality<input placeholder="nationality" type="text" name="new_nationality" value="<?php echo "$nationality" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Club ID<input placeholder="club_id" type="text" name="new_club_id" value="<?php echo "$club_id" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            
            <!-- submit button -->
            <div class="form group-row">
                <button type="submit" class="btn btn-info col-sm-4">Update</button> 
            </div>
            <br>
            

        </form>
    </div></center>



    

    <br>
</body>
</html>

<?php include "admin_footer.php"; ?>

<?php

    $manager_new_name = $_POST["manager_new_name"];
    $new_nationality  = $_POST["new_nationality"];
    $new_club_id      = $_POST["new_club_id"];

    $qry2 = " UPDATE managers SET manager_name='".$manager_new_name."', nationality='".$new_nationality."', club_id='".$new_club_id."' WHERE manager_id='".$manager_id."'  ";

    if($con->query($qry2))
    {
        echo "<script>alert('Table updated')</script>";
        // header("Location:admin_clubs.php");
        
    }
    else
    {
        echo "<script> alert(' - Not Updated - ') </script>";
    }



?>



