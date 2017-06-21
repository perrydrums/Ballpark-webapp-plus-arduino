// jQuery FUNCTION TO AJAX TO scoreboard/getScore.php
// GRABS THE SCORE
// FUNCTION IS RUN MULTIPLE TIMES A SECOND IN scoreboard/index.php AND scoreboard/mobile.php

function score(){

    $.ajax({
        dataType: "json",
        url: "getScore.php",
        context: document.body
        }).done(function (data) {
            console.log(data);
            $(this).addClass("done");
            $('#score').text(data);
        })
}
