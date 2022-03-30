<html>
<head>
    <meta title="hotel">
    <meta lang="english">
</head>
<body>

<?php
$liczba = $_POST['liczba'];

spr_czy_naturalna($liczba);

function spr_czy_naturalna($x){
    if($x>0) {
        echo("Liczba jest naturlna.<br>");
        spr_czy_pierwsza($x);
    }
    else echo("Liczba nie jest naturalna.<br>");
}

function spr_czy_pierwsza($x){
    if($x>0 && $x<4) echo("Liczba jest pierwsza");
    if($x>3) {
        $i = 2;
        $operacje = 1;
        for (;$i < $x, $x%$i!=0; $i++, $operacje++) {
        }
        if($i == $x){
            echo("Liczba jest liczbą pierwsza.<br>");
        } else echo("Liczba nie jest liczbą pierwszą.<br>");
    echo("Wykonane operacje: ".$operacje);
    }
}
?>
</body>
</html>