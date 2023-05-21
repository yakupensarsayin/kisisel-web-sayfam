<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "Adınız: " .$_POST["name"]. " Soyadınız: " . $_POST["surname"]; 
        echo "<br>";
        echo "E-postanız: " .$_POST["email"];
        echo "<br>";
        echo "Cinsiyetiniz: ".$_POST["genders"];
        echo "<br>";
        echo "Mesajınız: ".$_POST["message"];
    }

?>