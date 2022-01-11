<?php
    include_once("Klasy/Baza.php");
    $bd = new Baza("localhost", "root", "", "typuj-speedway");
    $username = filter_input(INPUT_POST, "login");
    $email = filter_input(INPUT_POST, "email");

    if($bd->select("SELECT id FROM users WHERE userName = '".$username."'", ["id"]) != ""){
        echo "Istnieje użytkownik o takim loginie";
    }
    else if($bd->select("SELECT id FROM users WHERE email = '".$email."'", ["id"]) != ""){
        echo "Istnieje użytkownik o podanym emailu";
    }
    else{
        echo "dobrze";
    }
?>