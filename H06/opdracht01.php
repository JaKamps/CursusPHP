<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    table, tr {
        border: solid 3px black;
    }
    td {
        border: solid 1px black;
    }
    </style>
</head>
<body>
 
    <table>

    <?php


    $servername = "localhost";
    $dbname = "id18989005_phpschool";
    $username = "id18989005_kipster";
    $password = "0]n3EG|>&k{TjNuX";

    try {
        $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
        //set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection Failed Successfully:" . $e->getMessage()();
    }

    	$query ="SELECT * FROM cursist";
        $stmt = $conn->prepare($query) or die ("Error 1.");
        $stmt->execute() or die ('error 2.');

        while ($row = $stmt->fetch()){
            echo "<tr>";
            echo "<td>". $row["cursistnr"] ."</td>";
            echo "<td>". $row["naam"] ."</td>";
            echo "<td>". $row["roepnaam"] ."</td>";
            echo "<td>". $row["straat"] ."</td>";
            echo "<td>". $row["postcode"] ."</td>";
            echo "<td>". $row["plaats"] ."</td>";
            echo "<td>". $row["geslacht"] ."</td>";
            echo "<td>". $row["geb_datum"] ."</td>";
            echo "</tr>";
        }



    ?>

    </table>

</body>
</html>