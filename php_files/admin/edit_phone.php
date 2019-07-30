<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();


    

    if(isset($_GET['edit']))
    {
        $phone_id = $_GET['edit'];
        $qry = " SELECT * FROM phone WHERE phone_id = '".$phone_id."' ";
        $res = $con->query($qry);

        if($res->num_rows > 0)
        { 
            while($row = $res->fetch_assoc() )
            {
                $phone_id     = $row["phone_id"];
                $phone_number = $row["phone_number"];
                $stadium_id   = $row["stadium_id"];
            }    
        }
        
    }

?>


<html>
<head>
    <title>Admin | Team Stats </title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/add_club.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../../css/add_club.css"> -->
    

</head>
<body>
    <br>

    <center><h1>Change Phone number</h1></center>
    <hr width="600px">

    <center>
    <div class="container">
        <form action="" method="post">

            <div class="form group-row">
                Phone ID<input placeholder="Phone ID" type="number" name="new_phone_id" value="<?php echo "$phone_id" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Phone Number<input placeholder="phone_number" type="number" name="new_phone_number" value="<?php echo "$phone_number" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                Stadium ID<input placeholder="stadium_id" type="text" name="new_stadium_id" value="<?php echo "$stadium_id" ; ?>" class="form-control col-sm-4" disabled>
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

    
    $new_phone_id = $_POST["new_phone_id"];
    $new_phone_number = $_POST["new_phone_number"];


    $qry2 = " UPDATE phone 
    SET phone_number='.$new_phone_number.'
    WHERE phone_id='".$new_phone_id."'  ";

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



