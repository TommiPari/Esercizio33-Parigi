<?php
    session_start();
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
        <h1>Cf ed età</h1>
    </div> <br>
    <div class="divCentrale">
        <div style="text-align:left;">
            <p>Totale registrazioni:</p>
            <ul>
                <?php foreach ($_SESSION['registrazioni'] as $cf => $eta) {
                    echo "<li>$cf : $eta</li>";
                }?>
            </ul>
            <a href="./index.html">Torna indietro</a>
        </div>
    </div>
    <br>
</body>
</html>