
<html>
<head>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>
<body>
<h1>System rezerwacji pokoju</h1>
<form method="post">
    <h3>Wybierz liczbę osób</h3>
    <input name="guest_number" type="number" value="1" min="1" max="4"required><br>
    <h3>Imię osoby rezerwującej </h3>
    <input name="booker_name" type="text" required maxlength="20"><br>
    <h3>Nazwisko osoby rezerwującej </h3>
    <input name="booker_ln" type="text" required maxlength="20"><br>
    <h3>Adres osoby rezerwującej </h3>
    <textarea name="adres" required height="50" maxlength="250"> </textarea><br>
    <h3>Adres email</h3>
    <input name="mail" type="email" required maxlength="50"><br>
    <h3>Data przyjazdu</h3>
    <input name="arrival" type="date" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"required><br>
    <h3>Data wyjazdu</h3>
    <input name="departure" type="date" min="<?php echo date('Y-m-d'); ?>"required><br>
    <h3>Numer karty bankowej</h3>
    <input name="cardId" type="number"  minlength="16" maxlength="16" required><br>
    <h3>Okres ważności karty</h3>
    <input name="cardExpMo" type="number"  min="0" max="12" maxlength="2" minlength="1" size="1"required>/<input name="cardExpDay" type="number"  min="0" max="31" maxlength="2" minlength="1" size="1"><br>
    <h3>Kod bezpieczeństwa</h3>
    <input name="cardSec" type="number" minlength="3" maxlength="3" size="1"required><br>
    <h3>Dodatkowe udogodnienia</h3>
    Łóżeczko dla dziecka:
    <input name="crib" type="checkbox" value="crib"><br>
    Klimatyzacja:
    <input name="conditioning" type="checkbox" value="conditioning"><br>
    Popielniczka:
    <input name="ashtray" type="checkbox" value="ashtray"><br>
    <input type="submit" value="Zapisz do bazy danych" name="zapisz">
</form>
<form method="post"><input type="submit" value="Wyswietl baze danych" name="wyswietl"></form>
<br>

<?php
$booker_name = $_POST['booker_name'];
$booker_ln = $_POST['booker_ln'];
$adres = $_POST['adres'];
$mail = $_POST['mail'];
$arrival = $_POST['arrival'];
$departure = $_POST['departure'];
$cardId = $_POST['cardId'];
$cardExp = $_POST['cardExpMo']."/".$_POST['cardExpDay'];
$cardSec = $_POST['cardSec'];
$crib = $_POST['crib'];
$conditioning = $_POST['conditioning'];
$ashtray = $_POST['ashtray'];

if(isset($_POST['zapisz']))
{
    if (!$file = fopen("dbx.csv", "a+")) {

            $str = $booker_name.";".$booker_ln.";".$adres.";".$mail.";".$arrival.";".$departure.";".$cardId.";".
                $cardExp.";".$cardSec.";".$crib.";".$conditioning.";".$ashtray.";\n";
            fwrite($file, $str);
            fclose($file);
        } else echo "nie można zapisać pliku";
}

$linia = 1;
if(isset($_POST['wyswietl']))
{
    if ($file = fopen("dbx.csv", "r")) {
        while (($data = fgetcsv($file, 1000, ";")) !== FALSE) {
            $atrybuty = count($data);
            $linia++;
            for ($n = 0; $n < $atrybuty; $n++) {
                echo $data[$n] . " ";
            }
            echo "<br>";
        }
        fclose($file);
    } else echo "nie można otworzyć pliku";
}

?>
</body>
</html>



