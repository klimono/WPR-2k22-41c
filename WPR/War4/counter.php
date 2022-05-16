<?php
session_start();
if(!isset($_COOKIE['counter'])){setcookie("counter", 1, time() + 604800); echo("<h3>Licznik odświeżeń po zalogowaniu (cookies): ".$_COOKIE["counter"]).". </h3>";}
else{setcookie("counter", $_COOKIE['counter']+1, time() + 604800); echo("<h3>Licznik odświeżeń po zalogowaniu (cookies): ".$_COOKIE["counter"]).". </h3>";}
?>