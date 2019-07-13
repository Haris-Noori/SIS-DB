<?php
    include "php_files/header.php";
?>

<!DOCTYPE html>
<head>
    <title> Premier League | Home </title>

    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

    <!-- <h1>This is home, lets Start!!</h1> -->



    <div class="jumbotron" id="index-jumbotron">
        <h1 class="display-4"> <strong> <b> Premier League Season 2018/19 </b> </strong> </h1>
        <p class="lead">Premier League Football News, Fixtures and Results</p>
        <hr class="my-4">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- table starts -->
                <table class="table table-primary pts_tbl">
                    <h3>Points Table</h3>
                    <thead>
                        <tr class="tbl_head">
                            <th scope="col">Pos</th>
                            <th scope="col">Club</th>
                            <th scope="col">Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Manchester City</td>
                            <td>98</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Liverpool</td>
                            <td>97</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Chelsea</td>
                            <td>72</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Tottenham Hotspur</td>
                            <td>71</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Arsenal</td>
                            <td>71</td>
                        </tr>
                        
                    </tbody>    
                </table>
                <p> <a href="php_files/points_table.php">view full table</a> </p>
                <!-- table ends -->
            </div>

            <div class="col"> <div style="text-align: center"><h3>Transfer News</h3></div> 


            </div>
        </div>
    </div>


    
    
    
    <?php  include "php_files/footer.php"; ?>
</body>
</html>