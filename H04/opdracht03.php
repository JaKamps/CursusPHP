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
        echo reverseString("jorn");

        function reverseString($originalString) {
            $stringLenght = strlen($originalString);
            $reversedString = "";
            for($i = $stringLenght - 1; $i >= 0; $i--) {
                $reversedString .= substr($originalString, $i, 1);
            }
            return $reversedString;
        }

    ?>
    
</body>
</html>