<?php
    $score = rand(50, 100);
    function displayScore($score, $grade) {
        for ($i = 0; $i < 100; $i++) {
            echo "<h1>Your Score: {$score}/100 </h1>";
            echo "<h2>Your grade: {$grade} </h2>";  
        }   
    }
    if ($score < 70) {
        displayScore($score, $grade = "D");
    }
    else if ($score >= 70 && $score < 80) {
        displayScore($score, $grade = "C");
    }
    else if ($score >= 80 && $score < 90) {
        displayScore($score, $grade = "B");
    }
    else if ($score >= 90) {
        displayScore($score, $grade = "A");
    }
?>