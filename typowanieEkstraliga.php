<!DOCTYPE html>
<html lang="pl">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
    <link rel="stylesheet" href="css/styleEkstraliga.css">
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
    <button id="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </button>
    <nav>
        <div class="logo"><a href="index.php">Speedway Typer 2022</a></div>
        <label for="btn" class="icon">
            <span class="fas fa-align-justify"></span>
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
    <div id="menu">
        <span>Wybierz kolejkę: </span>
        <a href="#i">I</a>
        <a href="#ii">II</a>
        <a href="#iii">III</a>
        <a href="#iv">IV</a>
        <a href="#v">V</a>
        <a href="#vi">VI</a>
        <a href="#vii">VII</a>
        <a href="#viii">VIII</a>
        <a href="#ix">IX</a>
        <a href="#x">X</a>
        <a href="#xi">XI</a>
        <a href="#xii">XII</a>
        <a href="#xiii">XIII</a>
        <a href="#xiv">XIV</a>
    </div>
    <div id="i"></div>
    <h1>PGE Ekstraliga: kolejka I (08.04.2022 - 10.04.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>08.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Fogo Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>08.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Lublin:</h3>
                    <input type="number">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>10.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz Gkm<br><span>Grudziądz</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>10.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="ii"></div>
    <h1>PGE Ekstraliga: kolejka II (16.04.2022 - 17.04.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>16.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>16.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>17.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Lublin:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>17.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="iii"></div>
    <h1>PGE Ekstraliga: kolejka III (22.04.2022 - 24.04.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>22.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Motor:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>22.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>24.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>24.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="iv"></div>
    <h1>PGE Ekstraliga: kolejka IV (29.04.2022 - 01.05.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>29.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>29.04.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>01.05.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>01.05.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Lublin:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="v"></div>
    <h1>PGE Ekstraliga: kolejka V (06.05.2022 - 08.05.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>06.05.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Lublin:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>06.05.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>08.05.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>08.05.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="vi"></div>
    <h1>PGE Ekstraliga: kolejka VI (20.05.2022 - 22.05.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>20.05.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>20.05.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Lublin:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>22.05.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>22.05.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="vii"></div>
    <h1>PGE Ekstraliga: kolejka VII (03.06.2022 - 05.06.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>03.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>03.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>05.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Lublin:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>05.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="viii"></div>
    <h1>PGE Ekstraliga: kolejka VIII (10.06.2022 - 12.06.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>10.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>10.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>12.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>12.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Lublin:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="ix"></div>
    <h1>PGE Ekstraliga: kolejka IX (17.06.2022 - 19.06.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>17.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Motor:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>17.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>19.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>19.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="x"></div>
    <h1>PGE Ekstraliga: kolejka X (24.06.2022 - 26.06.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>24.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>24.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>26.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>26.06.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Lublin:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="xi"></div>
    <h1>PGE Ekstraliga: kolejka XI (01.07.2022 - 03.07.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>01.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>01.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>03.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Lublin:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>03.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="xii"></div>
    <h1>PGE Ekstraliga: kolejka XII (15.07.2022 - 17.07.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>15.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>15.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Lublin:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>17.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>17.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="xiii"></div>
    <h1>PGE Ekstraliga: kolejka XIII (22.07.2022 - 24.07.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>22.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard Sparta<br><span>Wrocław</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>22.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>24.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Lublin:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>24.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
    <div id="xiv"></div>
    <h1>PGE Ekstraliga: kolejka XIV (05.08.2022 - 07.08.2022)</h1>
    <div class="container">
        <div class="card">
            <div class="part date">
                <h3>05.07.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/leszno-logo.png"></div>
                    <div class="contentBx">
                        <h3>Unia<br><span>Leszno</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/cze-logo.png"></div>
                    <div class="contentBx">
                        <h3>Włókniarz<br><span>Częstochowa</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Leszno:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Częstochowa:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>05.08.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/gkm-logo.png"></div>
                    <div class="contentBx">
                        <h3>Zooleszcz GKM<br><span>Grudziądz</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/ost-logo.png"></div>
                    <div class="contentBx">
                        <h3>Arged Malesa<br><span>Ostrów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Grudziądz:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Ostrów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>07.08.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/tor-logo.png"></div>
                    <div class="contentBx">
                        <h3>Apator<br><span>Toruń</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/sparta-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Betard SParta<br><span>Wrocław</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Toruń:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Wrocław:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="part date">
                <h3>07.08.2022</h3>
            </div>
            <div class="part">
                <div class="content">
                    <div class="imgBx"><img src="img/motor-logo.jpg"></div>
                    <div class="contentBx">
                        <h3>Motor<br><span>Lublin</span></h3>
                    </div>
                </div>
                <div class="content">
                    <div class="imgBx"><img src="img/stal-logo.png"></div>
                    <div class="contentBx">
                        <h3>Stal<br><span>Gorzów</span></h3>
                    </div>
                </div>
            </div>
            <div class="typowanie">
                <div class="obok">
                    <h3>Wynik meczu:</h3>
                    <div>
                        <h3>45 : 45</h3>
                    </div>
                </div>
                <h3>Twoje typowanie:</h3>
                <div class="obok">
                    <h3>Lublin:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <div class="obok">
                    <h3>Gorzów:</h3>
                    <input type="number" min="15" max="75">
                </div>
                <button>Zatwierdź</button>
                <div class="obok">
                    <h3>Twoje punkty za mecz:</h3>
                    <div>
                        <h3>10</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="podsumowanieKolejki">
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kolejce: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Punkty zdobyte w kategorii Ekstraliga: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
        <div class="punktyKolejki">
            <h3>Suma wszystkich punktów: </h3>
            <div>
                <h3>X</h3>
            </div>
        </div>
    </div>
<script src="js/scrollup.js"></script>
</body>

</html>