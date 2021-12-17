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
        var_dump($_FILES);
        //if (isset($_POST['zapisz']) && $_POST['zapisz'] == 'Zapisz' && !isset($_GET['pic'])) {
            //if (is_uploaded_file($_FILES['awatar']['tmp_name'])) {
                //$typ = $_FILES['awatar']['type'];
                //if ($typ === 'image/jpeg') {
                    //move_uploaded_file($_FILES['awatar']['tmp_name'],'./'.$_FILES['awatar']['name']);
        //kod będzie uzupełniany w kolejnych punktach

        //             $link = $_FILES['zdjecie']['name'];
        //             $random = uniqid('img_'); //wygenerowanie losowej wartości
        //             $zdj = $random . '.jpg';
        //             copy($link, './' . $zdj); //utworzenie kopii zdjęcia
        //             list($width, $height) = getimagesize($zdj); //pobranie rozmiarów obrazu
        //             $wys = $_POST['wys']; //wysokość preferowana przez użytkownika
        //             $szer = $_POST['szer']; //szerokość preferowana przez użytkownika
        //             $skalaWys = 1;
        //             $skalaSzer = 1;
        //             $skala = 1;
        //             if ($width > $szer) $skalaSzer = $szer / $width;
        //             if ($height > $wys) $skalaWys = $wys / $height;
        //             if ($skalaWys <= $skalaSzer) $skala = $skalaWys;
        //             else $skala = $skalaSzer;
        // //ustalenie rozmiarów miniaturki tworzonego zdjęcia:
        //             $newH = $height * $skala;
        //             $newW = $width * $skala;

        //             header('Content-Type: image/jpeg');
        //             $nowe = imagecreatetruecolor($newW, $newH); //czarny obraz
        //             $obraz = imagecreatefromjpeg($zdj);
        //             imagecopyresampled($nowe, $obraz, 0, 0, 0, 0,
        //             $newW, $newH, $width, $height);
        //             imagejpeg($nowe, './mini-' . $link, 100);
        //             echo "nowe=/mini-$link <br>";
        //             imagedestroy($nowe);
        //             imagedestroy($obraz);
        //             unlink($zdj);
        //             $dlugosc = strlen($link);
        //             $dlugosc -= 4;
        //             $link = substr($link, 0, $dlugosc);
        //             echo "link=$link <br/>";
        //             header('location:zdjecia.php?pic='.$link);
                //}
                //else {
                    //$errors .= "Błędny format pliku";
                //}
            //}
        //}
        foreach ($dane as $key => $val) {
            if ($val === false or $val === NULL) {
                $errors .= $key . " ";
            }
        }
        
        if ($errors === "") {
            $date = new DateTime();
            $date = $date->format('Y-m-d H:i:s');
            //href="' . $_GET['pic'] . '.jpg"
            echo "INSERT INTO users VALUES (NULL, '".$dane['name']."', '".$dane['surname']."', '".$dane['email']."', '".password_hash($dane['password'], PASSWORD_DEFAULT)."', '$date', '".$_GET['pic'].".jpg')";
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