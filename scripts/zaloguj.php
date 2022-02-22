<?php
    include_once '../Klasy/Baza.php';
    include_once '../Klasy/UserManager.php';
    $db = new Baza("localhost", "root", "", "typuj-speedway");
    $um = new UserManager();
    if (filter_input(INPUT_GET, "akcja")=="wyloguj") {
       $um->logout($db);
       header("location:../index.php");
    }
    if (filter_input(INPUT_POST, "Zaloguj")) {
       $userId=$um->login($db);
       if ($userId > 0) {
            header("location:../index.php");
        } else{
            header("location:../login.php?status=badLogin");
        }
    }
?>