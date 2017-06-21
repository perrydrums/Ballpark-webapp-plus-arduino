<!--  START OF THE PAGE IN index.php  -->

<body>
    <div data-role="page" id="index" data-theme="a" data-ajax="false">
      <div data-role="header">
        <a href="index.php" class="ui-btn-left ui-btn-corner-all ui-btn ui-icon-home ui-btn-icon-notext ui-shadow">"HOME"</a>
        <h1>Overschie Ballpark</h1>
      </div>

      <div data-role="main" class="ui-content">

          <div class="box">
              <div class="title">
                  Welkom, <?= $results['data']['full_name']; ?>
              </div>
          </div>

          <!--  INSTAGRAM PROFILE INFORMATION  -->

          <div class="box">
              <table width="100%">
                  <tr>
                      <td rowspan="3" style="padding-bottom: 0;">
                          <a href="http://instagram.com/<?= $results['data']['username'] ?>">
                              <img src="<?= $results['data']['profile_picture'] ?>" alt="Profielfoto" class="profilePicture">
                          </a>
                      </td>
                      <td style="padding-left: 10px;" valign="top">
                          <a href="http://instagram.com/<?= $results['data']['username'] ?>">
                               <?= $results['data']['username']; ?>
                           </a>
                      </td>
                  </tr>
                  <tr>
                      <td style="padding-left: 10px;" valign="center">
                          <a href="topscores.php">Hi-score: 0</a>
                      </td>
                  </tr>
                  <tr>
                      <td style="padding-left: 10px; padding-bottom: 2px;" valign="bottom">
                          <a class="logoutLink" href="logout.php" data-ajax="false">Log uit</a>
                      </td>
                  </tr>
              </table>
          </div>

          <!--  LINKS  -->

          <div class="box" style="text-align: center;">
              <div class="boxLink">
                  <p>
                      <a href="#">Start een spel</a>
                  </p>
              </div>
          </div>

          <div class="box" style="text-align: center;"  onclick="location.href='teams.php';">
              <div class="boxLink">
                  <p>
                      <a href="teams.php">Team samenstellen</a>
                  </p>
              </div>
          </div>

          <div class="box" style="text-align: center;" onclick="location.href='scoreboard/mobile.php';">
              <div class="boxLink">
                  <p>
                      <a href="scoreboard/mobile.php">Scorebord</a>
                  </p>
              </div>
          </div>

          <div class="box" style="text-align: center;"  onclick="location.href='rules.php';">
              <div class="boxLink">
                  <p>
                      <a href="rules.php">Spelregels</a>
                  </p>
              </div>
          </div>


      </div> <!-- END OF PAGE CONTENTS - ui-content -->

      <div data-role="footer" data-position="fixed">
        <h1>&copy; 2017 Ballpark</h1>
      </div>
    </div>
</body>
</html>
