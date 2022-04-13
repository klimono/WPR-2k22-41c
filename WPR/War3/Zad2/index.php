<html>
<head>

</head>
<body>
<h1>Zapis do pliku</h1>
<form method="post">
    <h3>Name:</h3>
    <br>
    <input type="text" size="30px" name="name" required>
    <br>
    <h3>Last name:</h3>
    <br>
    <input type="text" size="30px" name="last_name" required>
    <br>
    <h3>E-mail:</h3>
    <br>
    <input type="email" size="30px" name="email" required>
    <br>
    <input type="submit" value="Zapisz do pliku na serwerze:">
</form>
<br>

<?php
$name = $_POST["name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
if(!is_null($name) && !is_null($last_name) && !is_null($email)) {
    if (!$file = fopen("dbx.txt", "a+")) {
        echo "nie można zapisać pliku";
    } else {
        $str = "Imie: " . $name . " Nazwisko: " . $last_name . " Email: " . $email . "\n";
        fwrite($file, $str);
        fclose($file);
        echo "rekord zapisany do pliku";
    }
}
?>
</body>
</html>
