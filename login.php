<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <section class="form login">
            <header><a href="index.php">Speedway Typer 2022</a></header>
            <form action="scripts/zaloguj.php" method="POST">
                <?php
                        if (filter_input(INPUT_GET, "status")=="logged") {
                            echo "<div class='registration_error' id='registration_error' style='display: block; color: green; border-color: green; background-color: #7fff74;'>Zarejestrowano pomyślnie</div>";
                        }
                        else if(filter_input(INPUT_GET, "status")=="badLogin"){
                            echo "<div class='registration_error' id='registration_error' style='display: block'>Błędne hasło lub login</div>";
                        }
                ?>
                <div class="registration_error" id="registration_error">Podano błędne dane</div>
                <div class="field input">
                    <label>Nazwa użytkownika lub adres email</label>
                    <input type="text" placeholder="Podaj nazwę lub email" name="login">
                </div>
                <div class="field input">
                    <label>Hasło</label>
                    <input type="password" placeholder="Podaj hasło" name="passwd">
                </div>
                <div class="field button">
                    <input type="submit" value="Zaloguj" name="Zaloguj">
                </div>
                <div class="link">Nie masz konta? <a href="registration.html">Zarejestruj się!</a></div>
            </form>
        </section>
    </div>
</body>

</html>