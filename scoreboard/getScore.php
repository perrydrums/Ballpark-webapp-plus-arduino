<?php
error_reporting(0);

session_start();
include("../connect.php");

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}

// IF THE CURRENT GAME IS MULTIPLAYER OR NOT
$multiplayer = false;

$scores = file("score.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// IF MULTIPLAYER, SHOW BOTH SCORES
if($multiplayer){
    if($scores[0] != null && $scores[1] != null){
        $score = $scores[0] . " - " . $scores[1];
    }
}else{
    if($scores[0] != null){
        $score = $scores[0];

        //UPDATE THE HI_SCORE TABLE
        $getHiScore = mysqli_query($db, "SELECT score FROM hi_score WHERE username = '".$username."'");
        $hiScore = mysqli_fetch_array($getHiScore);

        if(mysqli_num_rows($getHiScore) > 0){
            if($hiScore['score'] < $score){
                mysqli_query($db, "DELETE FROM hi_score WHERE username = '".$username."'");
                mysqli_query($db, "INSERT INTO hi_score VALUES ('','".$username."','".$score."')");
            }
        }else{
            mysqli_query($db, "INSERT INTO hi_score VALUES ('','".$username."','".$score."')");
        }
    }
}

// PRINT AS JSON SO getScore.js CAN READ IT
print json_encode($score);
