<?php

session_start();
include("../connect.php");

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
        <link rel="stylesheet" href="../themes/ballpark.css" />
        <link rel="stylesheet" href="../themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    </head>
    <body>

    <div data-role="page" id="scoreboard" data-theme="a">
        <div data-role="header" data-position="fixed">
            <a href="../index.php" class="ui-btn-left ui-btn-corner-all ui-btn ui-icon-home ui-btn-icon-notext ui-shadow">"HOME"</a>
          <h1>Ballpark</h1>
        </div>

        <!-- SCORE, DISPLAYED IN DYNAMIC CYRCLE, SEE themes/ballpark.css -->
        <div data-role="main" class="ui-content">
            <div class="scoreWrapper">
                <div class="scoreBox">
                    <div class="contents">
                        <h1 class="scoreTitle">Score</h1>

                        <!-- SCRIPT BELOW PASTES SCORE IN THIS DIV -->
                        <div id="score"></div>

                        <script src="getScore.js"></script>
                        <script>var t=setInterval(score,100);</script>
                    </div>
                </div>
            </div>
        </div>

        <div data-role="footer" data-position="fixed">
          <h1>&copy; Ballpark</h1>
        </div>
    </div>

    </body>
</html>
