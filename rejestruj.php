<?php
    include_once("Klasy/Baza.php");
    $bd = new Baza("localhost", "root", "", "typuj-speedway");
    if(filter_input(INPUT_POST, "register")){
        $args = [
            'userName' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/^[a-zA-Z0-9]{1,15}$/']],
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
        
        if ($errors === "") {
            $avatarImg = "";
            if (is_uploaded_file($_FILES['awatar']['tmp_name'])) {
                $typ = $_FILES['awatar']['type'];
                if ($typ === 'image/jpeg' || $typ === 'image/jpg' || $typ === 'image/png' || $typ === 'image/gif' || $typ === 'image/bmp') {
                    $rozsz = substr($typ, 6);
                    move_uploaded_file($_FILES['awatar']['tmp_name'],'./awatary/'.$dane['userName'].".".$rozsz);
                    $avatarImg = "./awatary/".$dane['userName'].".".$rozsz;
                }
                else{
                    header("Location: registration.html");
                }
            }
            $date = new DateTime();
            $date = $date->format('Y-m-d H:i:s');
            if($bd->select("SELECT id FROM users WHERE userName = '".$dane['userName']."'", ["id"]) != ""){
                echo "Istnieje użytkownik o takim loginie";
            }
            else if($bd->select("SELECT id FROM users WHERE email = '".$dane['email']."'", ["id"]) != ""){
                echo "Istnieje użytkownik o podanym emailu";
            }
            else if($bd->insert("INSERT INTO users VALUES (NULL, '".$dane['userName']."','".$dane['name']."', '".$dane['surname']."', '".$dane['email']."', '".password_hash($dane['password'], PASSWORD_DEFAULT)."', '$date', '$avatarImg')")){
                echo "Zarejestrowano pomyślnie";
            }
            else{
                echo "Błąd rejestracji!";
            }

        } else {
            echo "<p>Błędne dane:$errors</p>";
        }
    }
?>

<!-- CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`userName` varchar(100) NOT NULL,
`name` varchar(255) NOT NULL,
`surname` varchar(100) NOT NULL,
`email` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL,
`date` datetime NOT NULL,
`avatarImg` varchar(255) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `userName`
(`userName`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
AUTO_INCREMENT=1 ; -->