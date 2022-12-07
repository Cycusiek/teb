<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="kalkulator.php">
<input type="text" name="liczba1" /><br />
<input type="radio" name="znak" value="+" /> +<br />
<input type="radio" name="znak" value="-" /> -<br />
<input type="radio" name="znak" value="*" /> *<br />
<input type="radio" name="znak" value="/" /> /<br />
<input type="text" name="liczba2" /> <br />
<input type="submit" value="Licz" />
</form>

<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
echo 'Wynik działania '.$liczba1.' '.$_POST['znak'].' '.$liczba2.' wynosi ';
switch($_POST['znak']) {
  case "+":
    echo $liczba1 + $liczba2; break;
  case "-":
    echo $liczba1 - $liczba2; break;
  case "*":
    echo $liczba1 * $liczba2; break;
  case "/":
    echo $liczba1 / $liczba2; break; }


//Połączenie z bazą danych
$connect = mysqli_connect("127.0.0.1","root","","gierki");
echo"<br>";
$wynik_zapytania  = mysqli_query($connect,"SELECT * FROM książka");

while ($rekord = mysqli_fetch_assoc($wynik_zapytania)){;
 echo"<br>";
 echo $rekord["Nazwa"];
 echo"<br>";
 echo $rekord["Autor"];
 echo"<br>";
 echo $rekord["Data"];
 echo"<br>";
    }
?> 

</body>
</html>