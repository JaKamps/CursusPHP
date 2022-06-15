<?php
    $users = [
        "piet@worldonline.nl" => "doetje123",
        "klaas@carpets.nl" => "snoepje777",
        "truushendriks@wegweg.nl" => "arkiearkie201"
    ]
;

    function check_credentials($mailadress, $wachtwoord) {
        global $users;
        foreach ($users as $key => $value) {
            if ($key == $mailadress AND $value == $wachtwoord){
                return true;
            }
        }
        return false;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht04</title>
</head>
<body>
    <?php if (!isset($_POST['knop'])) { ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            E-mail: <input type="email" name="mailadress" placeholder="mailadress"><br>
            wachtwoord: <input type="password" name="wachtwoord" placeholder="wachtwoord"><br>
            <input type="submit" name="knop" value="VERSTUUR">
        </form>
        <?php
    }else {
        if (!isset($_POST['mailadress']) OR empty($_POST['mailadress'])){
            header("location: " .$_SERVER['PHP_SELF']);
        }if (!isset($_POST['wachtwoord']) OR empty($_POST['wachtwoord'])){
            header("location: " .$_SERVER['PHP_SELF']);
        }
        //opslaan variables
        $mailadress = $_POST['mailadress'];
        $wachtwoord = $_POST['wachtwoord'];
        if (check_credentials($mailadress, $wachtwoord)){
            header("location: opdracht01.php");
        }else{
            exit("Acess Denied!");
        }
    }



    ?>
</body>
</html>