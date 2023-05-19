<?php

function check($email, $desiredDomain, $password) {
    $userDomain = strstr($email, '@');
    $username = strstr($email, '@', true);
    $isDomainCorrect = ($userDomain === $desiredDomain);
    $isPasswordCorrect = ($username === $password);
    if ($isDomainCorrect && $isPasswordCorrect) {
        echo "Hoş geldin ".$username;
    } 
    else {
        header("Location: ../../giris.html");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $desiredDomain = "@sakarya.edu.tr";
    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];

    check($email, $desiredDomain, $password);
}

?>