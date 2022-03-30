<html>
<head>
    <meta title="hotel">
    <meta lang="english">
    <style>
        #tabelka {
            width: 30%;
            display: block;
            margin: 50px auto;
        }
        table, td, th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<div id="tabelka">
<table>
    <tr>
        <th>
        Imię
        </th>
        <th>
            <?php
            $booker_name = $_POST['booker_name'];
            echo($booker_name) ?>
        </th>
    </tr>
    <tr>
        <th>
            Nazwisko
        </th>
        <th>
            <?php
            $booker_ln = $_POST['booker_ln'];
            echo($booker_ln) ?>
        </th>
    </tr>
    <tr>
        <th>
            Adres zamieszkania
        </th>
        <th>
            <?php
            $adres = $_POST['adres'];
            echo($adres) ?>
        </th>
    </tr>
    <tr>
        <th>
        Adres email
        </th>
        <th>
            <?php
            $mail = $_POST['mail'];
            echo($mail) ?>
        </th>
    </tr>
    <tr>
        <th>
            Data przyjazdu
        </th>
        <th>
            <?php
            $arrival = $_POST['arrival'];
            echo($arrival) ?>
        </th>
    </tr>
    <tr>
        <th>
            Data wyjazdu
        </th>
        <th>
            <?php
            $departure = $_POST['departure'];
            echo($departure) ?>
        </th>
    </tr>
    <tr>
        <th>
            Numer karty bankowej
        </th>
        <th>
            <?php
            $cardId = $_POST['cardId'];
            echo($cardId) ?>
        </th>
    </tr>
    <tr>
        <th>
            Okres ważności karty
        </th>
        <th>
            <?php
            $cardExpMo = $_POST['cardExpMo'];
            $cardExpDay = $_POST['cardExpDay'];
            echo($cardExpMo."/".$cardExpDay) ?>
        </th>
    </tr>
    <tr>
        <th>
            Kod bezpieczeństwa
        </th>
        <th>
            <?php
            $cardSec = $_POST['cardSec'];
            echo($cardSec) ?>
        </th>
    </tr>
    <tr>
        <th>
            Dodatkowe udogodnienia
        </th>
        <th>
            <?php
            $crib = $_POST['crib'];
            $conditioning = $_POST['conditioning'];
            $ashtray = $_POST['ashtray'];
            if($crib == false && $conditioning == false && $ashtray == false){
                echo("Brak");
            }
            if($crib == true) echo($crib."<br>") ;
            if($conditioning == true) echo($conditioning."<br>") ;
            if($ashtray == true) echo($ashtray."<br>") ;
            ?>
        </th>
    </tr>




</table>
</div>
</body>
</html>