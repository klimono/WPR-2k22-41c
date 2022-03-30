<html>
<head>
</head>
<body>
<h1>Wynik:</h1>
<?php
    $a = $_GET["a"];
    $b = $_GET["b"];
    $dzialanie = $_GET["dzialanie"];

    switch ($dzialanie){
        case "Dodawanie":
            echo($a+$b);
            break;
        case "Odejmowanie":
            echo($a-$b);
            break;
        case "Mnożenie":
            echo($a*$b);
            break;
        case "Dzielenie":
            echo($a/$b);
            break;
    }
?>
</body>
</html>