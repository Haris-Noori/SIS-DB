<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();


    

    if(isset($_GET['edit']))
    {
        $stadium_id = $_GET['edit'];
        $qry = " SELECT * FROM stadiums WHERE stadium_id = '".$stadium_id."' ";
        $res = $con->query($qry);

        if($res->num_rows > 0)
        { 
            while($row = $res->fetch_assoc() )
            {
                $stadium_id   = $row["stadium_id"];
                $stadium_name = $row["stadium_name"];
                $capacity     = $row["capacity"];
                $location     = $row["location"];
                $built        = $row["built"];
                $pitch        = $row["pitch_size"];
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

    <center><h1>Update the stadium informtion</h1></center>
    <hr width="600px">

    <center>
    <div class="container">
        <form action="" method="post">

            <div class="form group-row">
                Stadium Name<input placeholder="stadium_name" type="text" name="new_stadium_name" value="<?php echo "$stadium_name" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Capacity<input placeholder="capacity" type="number" name="new_capacity" value="<?php echo "$capacity" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Location<input placeholder="location" type="text" name="new_location" value="<?php echo "$location" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Built<input placeholder="built" type="number" name="new_built" value="<?php echo "$built" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Pitch Size<input placeholder="pitch_size" type="text" name="new_pitch" value="<?php echo "$pitch" ; ?>" class="form-control col-sm-4" required>
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

    $new_stadium_name = $_POST["new_stadium_name"];
    $new_capacity = $_POST["new_capacity"];
    $new_location      = $_POST["new_location"];
    $new_built = $_POST["new_built"];
    $new_pitch = $_POST["new_pitch"];

    $qry2 = " UPDATE stadiums SET stadium_name='".$new_stadium_name."', capacity='".$new_capacity."', location='".$new_location."', built='".$new_built."', pitch_size='".$new_pitch."' WHERE stadium_id='".$stadium_id."'  ";

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



