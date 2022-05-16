<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Zalogowano.</h1>



<?php
session_start();
$_SESSION['logged'] = "yes";
include('counter.php');
?>

<form action="logout.php"> <input type="submit" value="Wyloguj się"></form>
</body>
</html>