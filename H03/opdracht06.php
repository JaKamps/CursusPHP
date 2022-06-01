<?php
    $a = array(
        "de spartelkuikens" => 25,
        "de waterbuffels" => 32,
        "plonsmderin" => 11,
        "bommetje" => 23
    );

    foreach($a as $label => $waarde) {
        echo "$label , $waarde :";
        for($i = 5; $i <= $waarde; $i += 5){
            echo '*';
        }echo '<br>';
    }
?>