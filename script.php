<?php
    session_start();
    if (!isset($_SESSION['registrazioni'])) {
        $_SESSION['registrazioni'] = array();
    }
    $_SESSION['registrazioni'][$_GET['cf']] = $_GET['eta'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="titolo">
        <h1>CF ed età</h1>
    </div> <br>
    <div class="divCentrale">
        <a href="./risultato.php">Risultato</a> <br>
        <a href="./index.html">Torna indietro</a>
    </div>
    <br>
</body>
</html>