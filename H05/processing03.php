<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 200px;
        }
    </style>
</head>
<body>
 <?php

foreach ($_GET['Dieren'] as $diernaam) {
    
    echo '<img src="pictures/'.$diernaam.'.jpg"'. $diernaam . '">' . "<br>\n";
    echo "{$diernaam}.jpg<br>\n";
}
?>  


</body>
</html>







