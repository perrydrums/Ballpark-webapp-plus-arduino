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

    <div data-role="page" id="rules" data-theme="a">
        <div data-role="header" data-position="fixed">
            <a href="index.php" class="ui-btn-left ui-btn-corner-all ui-btn ui-icon-home ui-btn-icon-notext ui-shadow">"HOME"</a>
          <h1>Ballpark</h1>
        </div>

        <div data-role="main" class="ui-content">


            <div class="box">
                <div class="title">
                    Spelregels
                </div>
            </div>

            <div class="box">
                <p>Ballpark is een voetbalspel dat allerlei voorwerpen van het Mookhoekplein in Overschie gebruikt,
                denk hierbij aan bankjes, bomen en plantenbakken.
                Deze voorwerpen zullen in bepaalde kleuren oplichten. Het opgelichte voorwerp moet worden geraakt door een bal.
                Is het doelwit binnen de tijd geraakt: dan licht het volgende doelwit op.
                Je hebt steeds minder tijd de doelwitten te raken. Als je te laat ben is het game over.
                Je score is de hoeveelheid doelwitten die je geraakt heb.
                Diegene met de meeste punten heeft gewonnen.</p>

                <p>Het spel staat de hele dag aan en kan op elk moment gespeeld worden;
                de hi-scores worden altijd opgeslagen.
                Als je tegen elkaar wilt spelen en teams samenstellen kan dit ook.
                Dit kan je op de pagina <a href="teams.php">Teams Samenstellen</a> doen.
                </p>
            </div>


        </div>

        <div data-role="footer" data-position="fixed">
          <h1>&copy; 2017 Ballpark</h1>
        </div>
    </div>

    </body>
</html>
