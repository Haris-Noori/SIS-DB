
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/png" href="../../images/pl_favicon.ico"/>
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
                    <a class="nav-link" href="admin_clubs.php">Clubs</a>
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
                Welcome, Admin name <!-- watch at bottom of file -->
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






    <!-- DON'T CODE AFTER THIS LINE-->   
</body>
</html>

<!--  //echo " ".$_SESSION["user"]." " 