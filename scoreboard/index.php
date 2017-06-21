<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css">
        <meta charset="utf-8">
        <title>Ballpark Scoreboard</title>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    </head>
    <body>

        <h1>Score</h1>

        <!-- SCRIPT BELOW PASTES SCORE IN THIS DIV -->
        <div id="score"></div>

        <script src="getScore.js"></script>
        <script>var t=setInterval(score,100);</script>

    </body>
</html>
