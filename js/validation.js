function sprawdzPole(pole_id, obiektRegex) {
    var obiektPole = document.getElementById(pole_id);
    if (!obiektRegex.test(obiektPole.value)) return (false);
    else return (true);
}

function sprawdzRejstracje() {
    var ok = true;
    var error = "Niepoprawne "
    obiektImie = /^[AaĄąBbCcĆćDdEeĘęFfGgHhIiJjKkLlŁłMmNnŃńOoÓóPpQqRrSsŚśTtUuVvWwXxYyZzŹźŻż_ ]{1,15}$/;
    obiektNazwisko = /^[AaĄąBbCcĆćDdEeĘęFfGgHhIiJjKkLlŁłMmNnŃńOoÓóPpQqRrSsŚśTtUuVvWwXxYyZzŹźŻż_ ]{1,15}$/;
    obiektEmail = /^([a-zA-Z0-9])+([.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-]+)+/;
    obiektNazwa = /^[a-zA-Z0-9]{1,15}$/;
    obiektHaslo = /^(?=.*\d)(?=.*[a-z])(?=.*[\!\@\#\$\%\^\&\*\(\)\_\+\-\=])(?=.*[A-Z])(?!.*\s).{8,}$/;
    if (!sprawdzPole("name", obiektImie)) {
        ok = false;
        error += "imię ";
    }
    if (!sprawdzPole("surname", obiektNazwisko)) {
        ok = false;
        error += "nazwisko ";
    }
    if (!sprawdzPole("userName", obiektNazwa)) {
        ok = false;
        error += "nazwa użytkownika ";
    }
    if (!sprawdzPole("email", obiektEmail)) {
        ok = false;
        error += "email ";
    }
    if (!sprawdzPole("password", obiektHaslo)) {
        ok = false;
        error += "hasło ";
    }

    var file = document.getElementById('awatar');
    var fileName = file.value;
    var re = /(\.jpg|\.jpeg|\.bmp|\.gif|\.png)$/i;
    if (!re.exec(fileName)) {
        ok = false;
        error += "awatar "
    }

    var dane = "Potwierdź następujące dane do rejstracji:\n";
    dane += "Imię: " + document.getElementById('name').value + "\n";
    dane += "Nazwisko: " + document.getElementById('surname').value + "\n";
    dane += "Nazwa użytkownika: " + document.getElementById('userName').value + "\n";
    dane += "Adres email: " + document.getElementById('email').value + "\n";
   
    if (ok) {
        if (window.confirm(dane)) {
            return ok;
        } else return false;

    } else{
        document.getElementById("registration_error").style.display = "block";
        document.getElementById("registration_error").innerHTML = error;
        return false;
    }
}