<?php
    $leeftijd = array(10, 2,65,12);

    for($i = 0; $i <4;$i++) {
        if ($leeftijd[$i] < 3) {
            echo '0€';
            echo '<br>';
        }
        elseif($leeftijd[$i] <= 12) {
            echo '5€';
            echo '<br>';
        }elseif ( $leeftijd[$i] <= 65){
            echo '10€';
            echo '<br>';
        }elseif ($leeftijd[$i] > 65){
            echo '5€';
            echo '<br>';
        }
    }
?>