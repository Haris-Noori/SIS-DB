<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();


    

    if(isset($_GET['edit']))
    {
        $m_id = $_GET['edit'];
        $qry = " SELECT * FROM fixtures WHERE m_id = '".$m_id."' ";
        $res = $con->query($qry);

        if($res->num_rows > 0)
        { 
            while($row = $res->fetch_assoc() )
            {
                $m_id   = $row["m_id"];
                $club_id1   = $row["club_id1"];
                $club_id2   = $row["club_id2"];
                $m_time   = $row["m_time"];
                $m_date   = $row["m_date"];
                $stadium_id   = $row["stadium_id"];
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

    <center><h1>Update Fixture date, time and venue</h1></center>
    <hr width="600px">

    <center>
    <div class="container">
        <form action="" method="post">

            <div class="form group-row">
                Club 1<input placeholder="club_id1" type="text" name="new_club_id1" value="<?php echo "$club_id1" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Club 2<input placeholder="club_id2" type="text" name="new_club_id2" value="<?php echo "$club_id2" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Time<input placeholder="m_time" type="text" name="new_m_time" value="<?php echo "$m_time" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Date<input placeholder="m_date" type="date" name="new_m_date" value="<?php echo "$m_date" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Stadium id<input placeholder="stadium_id" type="text" name="new_stadium_id" value="<?php echo "$stadium_id" ; ?>" class="form-control col-sm-4" required>
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

    $new_club_id1 = $_POST["new_club_id1"];
    $new_club_id2 = $_POST["new_club_id2"];
    $new_m_time   = $_POST["new_m_time"];
    $new_m_date   = $_POST["new_m_date"];
    $new_stadium_id   = $_POST["new_stadium_id"];


    $qry2 = " UPDATE fixtures 
        SET club_id1='".$new_club_id1."',
        club_id2='".$new_club_id2."', 
        m_time='".$new_m_time."', 
        m_date='".$new_m_date."',
        stadium_id='".$new_stadium_id."' 
        WHERE m_id='".$m_id."'  ";

    if($con->query($qry2))
    {
        echo "<script>alert('Table updated')</script>";
        // header("Location:admin_clubs.php");
        
    }
    else
    {
        echo "<script> alert('Not Updated') </script>";
    }



?>



