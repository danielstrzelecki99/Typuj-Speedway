<?php
    include_once("Klasy/Baza.php");
    $bd = new Baza("localhost", "root", "", "typuj-speedway");
    if(filter_input(INPUT_POST, "register")){
        $args = [
            'name' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/^[A-Za-ząęłńśćźżó]{2,25}$/']],
            'surname' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/^[A-Za-ząęłńśćźżó]{2,25}$/']],
            'email' => FILTER_VALIDATE_EMAIL,
            'password' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
        ];
        $dane = filter_input_array(INPUT_POST, $args);
        $errors = "";
        foreach ($dane as $key => $val) {
            if ($val === false or $val === NULL) {
                $errors .= $key . " ";
            }
        }
        //echo "INSERT INTO users VALUES (NULL, '".$dane['name']."', '".$dane['surname']."', '".$dane['email']."','".password_hash($dane['password'], PASSWORD_DEFAULT)."')";
        if ($errors === "") {
            $date = new DateTime();
            $date = $date->format('Y-m-d H:i:s');
            var_dump("INSERT INTO users VALUES (NULL, '".$dane['name']."', '".$dane['surname']."', '".$dane['email']."', '".password_hash($dane['password'], PASSWORD_DEFAULT)."', $date)");
            if($bd->insert("INSERT INTO users VALUES (NULL, '".$dane['name']."', '".$dane['surname']."', '".$dane['email']."', '".password_hash($dane['password'], PASSWORD_DEFAULT)."', '$date')")){
                echo "Zarejestrowano pomyślnie";
            }
            else{
                echo "Błąd logowania!";
            }

        } else {
            echo "<p>Błędne dane:$errors</p>";
        }
    }
?>