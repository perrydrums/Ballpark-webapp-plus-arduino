<?php

include("connect.php");

$getScores = mysqli_query($db, "SELECT * FROM hi_score ORDER BY score DESC") or die(mysqli_error($db));

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ballpark Scoreboard</title>

        <!-- ADJUSTMENTS FOR MOBILE DEVICES -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="themes/ballpark.css" />
        <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    </head>
    <body>

    <div data-role="page" id="topscores" data-theme="a">
        <div data-role="header" data-position="fixed">
            <a href="index.php" class="ui-btn-left ui-btn-corner-all ui-btn ui-icon-home ui-btn-icon-notext ui-shadow">"HOME"</a>
          <h1>Ballpark</h1>
        </div>

        <div data-role="main" class="ui-content">


            <div class="box">
                <div class="title">
                    Hi-scores
                </div>
            </div>

            <div class="box">
                <table class="topscores">
                    <?php

                    while($scores = mysqli_fetch_assoc($getScores)){
                        if($scores['username'] == null && $scores['score'] == null){
                            //DO NOTHING
                        }else{
                            //USERNAME'S 'ANONIEM' IF NOT LOGGED IN
                            if($scores['username'] == null){
                                $name = "Anoniem";
                                $score = $scores['score'];
                            }else{
                                $name = $scores['username'];
                                $score = $scores['score'];
                            }
                            echo "<tr><td>" . $name . "</td>";
                            echo "<td>"     . $score . "</td></tr>";
                        }
                    }

                    ?>
                </table>
            </div>


        </div>

        <div data-role="footer" data-position="fixed">
          <h1>&copy; 2017 Ballpark</h1>
        </div>
    </div>

    </body>
</html>
