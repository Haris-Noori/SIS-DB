<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "sis_db";

    $con = new MySQLi($server, $user, $pass, $dbname);


    if ($con->connect_error) //if database failed to connect
	{
		echo "<script>alert('connection with database failed')</script>";
		echo "Error: ".$con->connect_error;
	} 
		
	else // if database connected !
	{
		echo "<script>alert('DataBase Connected')</script>";
	}

?>