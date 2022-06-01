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
for ($i = -70; $i <= 50; $i++) {
    calculateFahrenheitFromCelsius($i);
};

function calculateFahrenheitFromCelsius($celsius) {
    $fahrenheit = $celsius * 1.8 +32;
    echo "{$celsius} is {$fahrenheit}<br>\n";
}
?>
</body>
</html>