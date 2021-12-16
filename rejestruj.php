<?php
    include_once("Klasy/Baza.php");
    $bd = new Baza("localhost", "root", "", "typuj-speedway");
    if(filter_input(INPUT_POST, "register")){
        echo "dziala";
    }

?>