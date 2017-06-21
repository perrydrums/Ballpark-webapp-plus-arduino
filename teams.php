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

    <div data-role="page" id="teams" data-theme="a">
        <div data-role="header" data-position="fixed">
            <a href="index.php" class="ui-btn-left ui-btn-corner-all ui-btn ui-icon-home ui-btn-icon-notext ui-shadow">"HOME"</a>
          <h1>Ballpark</h1>
        </div>

        <div data-role="main" class="ui-content">


            <div class="box">
                <div class="title">
                    Teams
                </div>
            </div>

            <?php

            if(isset($_GET['edit']) && $_GET['edit']){
                //team setup
            }else{ ?>

                <div class="box">
                    <p style="text-align: center;">Jij zit in team: <b>Majesteit</b> </p>

                    <hr style="border: 1px solid rgb(137,212,208); width: 80%;">

                    <p style="text-align: center;">
                        <strong>Teamleden</strong>
                        <ul class="teams">
                            <li>Perry</li>
                            <li>Max</li>
                            <li>Rick</li>
                            <li>Dagmar</li>
                        </ul>
                    </p>
                </div>

                <div class="box" style="text-align: center;"  onclick="location.href='teams.php?edit=true';">
                    <div class="boxLink">
                        <p>
                            <a href="teams.php?edit=true">Pas team aan</a>
                        </p>
                    </div>
                </div>

            <?php } ?>


        </div>

        <div data-role="footer" data-position="fixed">
          <h1>&copy; 2017 Ballpark</h1>
        </div>
    </div>

    </body>
</html>
