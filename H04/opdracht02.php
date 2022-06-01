<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i = -10; $i <= 30; $i++) {
        if(checkIfDivisibleBy3($i)) {
            $wellofniet = "";
        }else {
            $wellofniet = "niet";
        }
        echo "{$i} is {$wellofniet} deelbaar door 3<br>\n";
    }

    function checkIfDivisibleBy3($number) {
        return $number % 3 === 0;
    }
    ?>
</body>
</html>