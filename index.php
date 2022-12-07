<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drain Gang</title>
</head>
<body>
     <h1>
    <?php
    echo "<h1>Hello World</h1>";
    echo "<p>Hello World</p>";
    function wyswietl($string,  $int){
       return ($string * $int);


    }
    //Wywoływanie funkcji
    
    //Przekazanie wyniku z funkcji do zmiennej
    $wynik = wyswietl(2,2);
      echo wyswietl(34,34);
      echo "<br>".$wynik;
    //Połączenie z baza danych
    $connect = mysqli_connect("127.0.0.1","root","","gierki");

    //zapytanie w bazie danych
    $wynik_zaptanie = mysqli_query($connect,"SELECT * FROM książka");

    //Wyświetl rekord z tabeli gierki
    while ($rekord = mysqli_fetch_assoc($wynik_zapytania)){;
    echo $rekord{"nazwa"};
    }





?>

</h1>
</body>
</html>