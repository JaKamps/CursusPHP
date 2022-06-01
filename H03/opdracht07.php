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
    $kappersagenda = [
        "9:15" => "mevr. pietersen",
        "9:30" => "mevr. willems",
        "9:45" => "",
        "10:00" => "Paul van den broek",
        "10:15" => "karel de Meeuw",
        "10:30" => ""

    ];

    print("de volgende momenten zijn nog beschikbaar:<ul>");
    foreach($kappersagenda as $tijd => $afspraak) {
        if($afspraak == "") {
            print("<li>".$tijd."</li>");
        
        }
    }
    ?>


</body>
</html>