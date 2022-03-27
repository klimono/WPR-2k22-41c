<html>
<head>

</head>
<body>

<br>


</body>
<?php
$liczby=array('11', '2', '8');
for($i=count($liczby);$i>=0;$i--){
    for($j=0;$j<$i-1;$j++){
        if($liczby[$j]>$liczby[$j+1]){
            $a=$liczby[$j];
            $liczby[$j]=$liczby[$j+1];
            $liczby[$j+1]=$a;
        }
    }
}
echo($liczby[0]." ".$liczby[1]." ".$liczby[2]);
echo("<br>");
echo($liczby[2]." ".$liczby[1]." ".$liczby[0]);
?>
</html>

