<?php
    include "connect.php";

    $user_id = $_POST["user_id"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $qry = " SELECT user_id FROM users WHERE user_id='".$user_id."' ";
    $res = $con->query($qry);
    if($res->num_rows > 0)
    {
        $msg = "user id already exists😧";
        header("Location:sign_up.php?Message=$msg");
    }
    else
    {
        $qry1 = " INSERT INTO users(user_id, username, password) VALUES ('".$user_id."' , '".$username."' , '".$password."') ";
        if($con->query($qry1))
        {
            $msg = "Successfully Registered😃";
            header("Location:sign_up.php?Message=$msg");
        }
        else
        {
            echo "<script>alert('Data not entered')</script>";
        }
    }
    

?>