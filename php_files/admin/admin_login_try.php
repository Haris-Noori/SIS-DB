<?php
    include "../connect.php";
    session_start();

    $user = $_POST["admin_name"];
    $pass = $_POST["admin_pass"];

    $qry = "SELECT * FROM admins WHERE username = '".$user."' ";

    //----------------------- check if query working
    // if($con->query($qry))
    // {
    //     echo "Query run success"; 
    // }
    // else
    // {
    //     echo "Query didn't run";
    // }
    //---------------------------------------

    $res = $con->query($qry);
    $msg = "";

    if($res->num_rows > 0)
    {   //admin exists
        $row = $res->fetch_assoc();

        if($row["password"] == $pass)
        {   //password is correct
            $_SESSION["user"] = $user;
            header("Location:admin_dashboard.php");
        }
        else
        {   //password is incorrect
            $msg = "Invalid Password";
            header("Location:../../admin-login.php?Message=$msg");
        }
    }
    else
    {   //admin does not exist
        $msg = " ".$user." does not exist";
        header("Location:../../admin-login.php?Message=$msg");
    }

    
?>