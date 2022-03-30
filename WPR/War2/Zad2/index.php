<html>
<head>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>
<body>
<h1>System rezerwacji pokoju</h1>
<form action="hotel.php" method="post">
    <h3>Wybierz liczbę osób</h3>
    <input name="guest_number" type="number" value="1" min="1" max="4"required><br>
    <h3>Imię osoby rezerwującej </h3>
    <input name="booker_name" type="text" required><br>
    <h3>Nazwisko osoby rezerwującej </h3>
    <input name="booker_ln" type="text" required><br>
    <h3>Adres osoby rezerwującej </h3>
    <textarea name="adres" required height="50"> </textarea><br>
    <h3>Adres email</h3>
    <input name="mail" type="email" required><br>
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
    <input type="submit" value="Dalej">
</form>
<br>

<?php




?>
</body>
</html>

