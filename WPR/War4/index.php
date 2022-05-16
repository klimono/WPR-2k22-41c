
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
<h1>System logowania</h1>
<?php
session_start();
$login = "admin";
$password = "admin";
if($_SESSION['logged'] == "yes"){include('login_accepted.php');}
if(empty($_POST['login']) && $_SESSION['logged'] != "yes"){include('form.html');}
if(($_POST['log'] == $login && $_POST['pas'] == $password) && $_SESSION['logged'] != "yes"){include('login_accepted.php');}
if(!empty($_POST['login']) && ($_POST['log'] != $login || $_POST['pas'] != $password) && $_SESSION['logged'] != "yes"){include('login_rejected.html');}

?>
<br>
</body>
</html>



