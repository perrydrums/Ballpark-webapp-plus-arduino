<?php

include("connect.php");

$getScores = mysqli_query($db, "SELECT * FROM hi_score ORDER BY score DESC") or die(mysqli_error($db));

while($scores = mysqli_fetch_assoc($getScores)){
    if($scores['username'] == null){
        echo "Anoniem: ".$scores['score'];
    }else{
        echo $scores['username'].$scores['score'];
    }
}

?>
