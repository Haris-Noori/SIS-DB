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

    <div class="container"> <!-- CRC-1-->
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

            <div class="col">
                <div style="text-align: center">
                    <h3><strong>Transfer News</strong>
                </div>
                <!-- slider starts -->
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="https://www.chelseafc.com/en/news/2019/07/01/mateo-kovacic-joins-chelsea-on-a-permanent-deal?utm_source=premier-league-website&utm_campaign=website&utm_medium=link"><img src="images/transfer_news_1.jpg" class="d-block w-100" alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="transfer_head">MATEO KOVACIC JOINS CHELSEA ON A PERMANENT DEAL</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="https://www.mancity.com/news/first-team/first-team-news/2019/july/jack-harrison-extends-deal-and-loaned-to-leeds-united"><img src="images/transfer_news_2.jpg" class="d-block w-100" alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="transfer_head">HARRISON PENS NEW CITY DEAL AND AGREES LEEDS LOAN</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="https://www.manutd.com/en/news/detail/aaron-wan-bissaka-signs-for-manchester-united?utm_source=premier-league-website&utm_campaign=website&utm_medium=link"><img src="images/transfer_news_3.jpg" class="d-block w-100" alt="..."></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>Third slide label</h5> -->
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- slider ends -->
            </div> 


            </div>
        </div>
    </div> <!-- CRC-1 -->

    <hr width="500px solid">


    
    
    
    <?php  include "php_files/footer.php"; ?>
</body>
</html>