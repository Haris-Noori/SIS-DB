<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/my_css.css">
    <link rel="stylesheet" type="text/css" href="../../css/admin_header.css">
    
</head>

<body>

    <!-- nav bar -->
    <!-- HEADER STARTS HERE -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav">
                <li class="nav-item active" id="dashboard_box">
                    <a class="nav-link" href="admin_dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Clubs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Players</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Managers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Stadiums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fixtures</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Points Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Club Stats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Player Stats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Users</a>
                </li>
                <!-- admin info -->                    
            </ul>

        </div>

        <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Welcome, <?php echo " ".$_SESSION["user"]." " ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="#">Change Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="admin_logout.php">Log Out</a>
            </div>
        </div>

    </nav>
    <!-- HEADER ENDS HERE -->



    <h3>Testing dropdown</h3>
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Action
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="admin_logout.php">Separated link</a>
        </div>
    </div>



    <!-- DON'T CODE AFTER THIS LINE-->
    
   
</body>
</html>