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
                <a href="typowanieEkstraliga.html">Typowanie</a>
                <ul>
                    <li><a href="typowanieEkstraliga.html">PGE Ekstraliga</a></li>
                    <li><a href="typowanie1liga.html">I liga żużlowa</a></li>
                    <li><a href="typowanie2liga.html">II liga żużlowa</a></li>
                </ul>
            </li>
            <li>
                <a href="profile.php">Profil</a>
            </li>
            <li>
                <a href="weather.html">Sprawdź pogodę</a>
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
    <div class="banner">
        <div class="content">
            <h1>Speedway Typer 2022</h1>
            <?php
                if($user == -1){
                    echo "<p>Aby wziąć udział w typowianiu musisz być zalogowany. Jeśli nie masz konta zarejestruj.</p>
                    <div>
                        <button type='button' onclick=`location.href='login.php';`>Logowanie</button>
                        <button type='button' onclick=`location.href='registration.html';`>Rejestracja</button>
                    </div>";
                }
                else{
                    echo "<p>Witaj ".$db->select("SELECT userName FROM users wHERE id=$user", ["userName"])."</p>";
                }
            ?>
            
        </div>
    </div>
</body>

</html>