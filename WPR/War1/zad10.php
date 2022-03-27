<html>
<head>

</head>
<body>

<br>


</body>
<?php
$a = 3;
for($i = 0; $i < $a; $i++){
    for($k=0; $k<=$i; $k++){
    echo("*");
    }
    echo("<br>");
}


for($i = $a-1; $i >= 0; $i--){
    for($k=0; $k<=$i; $k++){
        echo("*");
    }
    echo("<br>");
}


for($i = $a-1, $l = 0; $i >= 0; $i--, $l++){
    for($j = 0; $j < $l; $j++){
        echo("&nbsp;");
    }
    for($k=0; $k<=$i; $k++){
        echo("*");
    }
    echo("<br>");
}


for($i = 0, $l = $a-1; $i < $a; $i++, $l--){
    for($j = 0; $j < $l; $j++){
        echo("&nbsp;");
    }
    for($k=0; $k<=$i; $k++){
        echo("*");
    }
    echo("<br>");
}





?>
</html>

