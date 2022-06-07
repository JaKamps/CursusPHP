<?php

if (isset($_POST['naam']) && !empty($_POST['naam'])){
    $naam = $_POST['naam'];
}else{
    echo "U heeft geen naam ingevult<br>\n";
}

if (isset($_POST['email']) && !empty($_POST['email'])){
    $email = $_POST['email'];
}else{
    echo "U heeft geen E-mail ingevult<br>\n";
}

if (isset($_POST['password']) && !empty($_POST['password'])){
    $password = $_POST['password'];
}else{
    echo "U heeft geen E-mail ingevult<br>\n";
}
// validateData('naam');
// validateData('email');
// validateData('password');
// function validateData($index){
//     if (isset($_POST[$index]) && !empty($_POST[$index])){
//         $$index = $_POST[$index];
//     }else{
//         echo "U heeft geen {$index} ingevult<br>\n";
//     }
// }

if (!isset($naam) || !isset($email) || !isset($password)){
    exit("one or more of the required information is missing");
}

echo "dit zijn jou gegevens: <br>\n";
echo "naam: {$naam}<br>\n";
echo "E-mail: {$email} <br>\n";
echo "wachtwoord: {$password}<br>\n";