<?php
    include "../connect.php";
    include "admin_header.php";
    session_start();


    

    if(isset($_GET['edit']))
    {
        $club_id = $_GET['edit'];
        $qry = " SELECT * FROM clubs WHERE club_id = '".$club_id."' ";
        $res = $con->query($qry);

        if($res->num_rows > 0)
        { 
            while($row = $res->fetch_assoc() )
            {
                $club_id   = $row["club_id"];
                $club_name = $row["club_name"];
                $pl_titles = $row["pl_titles"];
                $rank      = $row["rank"];
            }    
        }
        
    }

?>


<html>
<head>
    <title>Admin | Clubs </title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/add_club.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../../css/add_club.css"> -->
    

</head>
<body>
    <br>

    <center><h1>Change and update the informtion</h1></center>
    <hr width="500px">

    <center>
    <div class="container">
        <form action="" method="post">

            <div class="form group-row">
                <input placeholder="club_id" type="text" name="club_id" value="<?php echo "$club_id" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="club_name" type="text" name="club_new_name" value="<?php echo "$club_name" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="pl_titles" type="number" name="pl_titles" value="<?php echo "$pl_titles" ; ?>" class="form-control col-sm-4" required>
            </div>
            <br>
            <div class="form group-row">
                <input placeholder="pl_titles" type="number" name="pl_titles" value="<?php echo "$rank" ; ?>" class="form-control col-sm-4" required>
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



