<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
    <link rel="stylesheet" href="css/navbarStyle.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
</head>

<body>
    <?php
        include_once 'Klasy/Baza.php';
        include_once 'Klasy/UserManager.php';
        $db = new Baza("localhost", "root", "", "typuj-speedway");
        $um = new UserManager();
        session_start();
        $user = $um->getLoggedInUser($db, session_id());
    ?>
    <nav>
        <div class="logo"><a href="index.php">Speedway Typer 2022</a></div>
        <label for="btn" class="icon">
            <span class="fab fa-accessible-icon"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li><a href="ranking.php">Ranking</a></li>
            <li>
                <a href="typowanieEkstraliga.php">Typowanie</a>
                <ul>
                    <li><a href="typowanieEkstraliga.php">PGE Ekstraliga</a></li>
                    <li><a href="typowanie1liga.html">I liga żużlowa</a></li>
                    <li><a href="typowanie2liga.html">II liga żużlowa</a></li>
                </ul>
            </li>
            <li>
                <a href="profile.php">Profil</a>
            </li>
            <li>
                <a href="weather.php">Sprawdź pogodę</a>
            </li>
            <?php
                if($user == -1){
                    echo "<li>
                    <a href='login.php'>Logowanie</a>
                    </li>";
                }
                else{
                    echo "<li>
                    <a href='scripts/zaloguj.php?akcja=wyloguj'>Wyloguj</a>
                    </li>";
                }
            ?>
        </ul>
    </nav>
    <h1>Ranking</h1>
</body>

</html>