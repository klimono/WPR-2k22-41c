<html>
<head>

</head>
<body>
<h1>Kalkulator</h1>
<form method="post">
    Wybierz liczbe A
    <input type="number" size="30px" name="a">
    Wybierz liczbe b
    <input type="number" size="30px" name="b">
    Wybierz działanie
    <select name="dzialanie">
        <option name="dodawanie">Dodawanie</option>
        <option name="odejmowanie">Odejmowanie</option>
        <option name="mnozenie">Mnożenie</option>
        <option name="dzielenie">Dzielenie</option>
    </select>
    <input type="submit" value="Wykonaj działanie!">
</form>
<br>

<?php
include ('kalkulator.php');
$a = $_POST["a"];
$b = $_POST["b"];
$dzialanie = $_POST["dzialanie"];

switch ($dzialanie){
    case "Dodawanie":
        dodawanie($a, $b);
        break;
    case "Odejmowanie":
        odejmowanie($a, $b);
        break;
    case "Mnożenie":
        mnozenie($a, $b);
        break;
    case "Dzielenie":
        dzielenie($a, $b);
        break;
}
?>
</body>
</html>
