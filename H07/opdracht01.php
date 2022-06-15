<?php 
session_start();

$users = array(
    "janjaap" => array("pwd" => "1234", "rol" => "administrator"),
    "bert" => array("pwd" => "1235", "rol" => "gebruiker"),
    "jans" => array("pwd" => "123", "rol" => "administrator"),
);

if(isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}


if(isset($_POST['knop'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]]["pwd"] == $_POST['pwd']){
        $_SESSION["user"] = array("naam" => $_POST["login"],
        "pwd" => $users[$_POST["login"]]["pwd"],
        "rol" => $users[$_POST["login"]]['rol']);
        $message = "welkom " . $_SESSION["user"] ["naam"] . "met de rol " . $_SESSION["user"]["rol"];
    }else {
        $message = "inloggen";
    }

    ?>
    <html>
        <body>
            <h1><?php echo $message;?></h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label for="login">login:</label>
                    <input type="text" name="login" value="" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="pwd">password:</label>
                    <input type="password" name="pwd" value="" placeholder="password">
                </div>
                <input type="submit" name="knop" value="">
            </form>
            <p><a href="website.php">website</a></p>
            <p><a href="admin.php">admin</a></p>
            <p><a href="opdracht01.php?loguit">uitloggen</a></p>
        </body>
    </html>


    