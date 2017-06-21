<!-- PAGE STARTS IN index.php -->


    <body>
        <div data-role="page" id="login" data-theme="a">
          <div data-role="header" data-position="fixed">
            <a href="index.php" class="ui-btn-left ui-btn-corner-all ui-btn ui-icon-home ui-btn-icon-notext ui-shadow">"HOME"</a>
            <h1>Ballpark</h1>
          </div>

          <div data-role="main" class="ui-content">

            <div class="box">
                <div class="title">
                    Overschie Ballpark
                </div>
                <p>
                    Welkom op de webapp van Ballpark Mookhoekplein.
                </p>
                <p>
                    Log in via Instagram om teams samen te stellen.
                </p>
                <p>
                    Je kan wel het live scorebord en de spelregels bekijken.
                </p>
            </div>

            <!--  INSTAGRAM LOGIN  -->

            <div class="box">
                <div class="boxLink" style="text-align: center;">
                    <p>
                        <a href="https://api.instagram.com/oauth/authorize/?client_id=<?= clientID ?>&redirect_uri=<?= redirectURI ?>&response_type=code&scope=public_content+basic+follower_list+comments+likes+relationships">Log in via Instagram!</a>
                    </p>
                </div>
            </div>

            <div class="box" style="text-align: center;">
                <div class="boxLink">
                    <p>
                        <a href="rules.php">Spelregels</a>
                    </p>
                </div>
            </div>

            <div class="box" style="text-align: center;">
                <div class="boxLink">
                    <p>
                        <a href="scoreboard/mobile.php">Scorebord</a>
                    </p>
                </div>
            </div>

          </div>

          <div data-role="footer" data-position="fixed">
            <h1>&copy; 2017 Ballpark</h1>
          </div>
        </div>
    </body>
</html>
