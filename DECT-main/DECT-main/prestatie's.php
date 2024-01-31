<?php
    session_start();
    $_SESSION['inloggen'] = false;
    if(array_key_exists('submitForm', $_POST)  && isset($_POST['username']) && isset($_POST['password'])) {
        $_SESSION['inloggen'] = "true";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prestatie's.css">
    <script src="prestatie's.js"></script>
    <title>Prestatie's</title>
</head>
<body>
    <img class="kamer" src="achtergrond2.webp">
    <div class="kast">
        <img src="Naamloos.png">
        <div class="row1">
            <img class="trophy1" id="trophy1" src="grey trophy.png">
            <img class="trophy2" id="trophy2" src="grey trophy.png">
            <img class="trophy3" id="trophy3" src="grey trophy.png">
            <img class="trophy4" id="trophy4" src="grey trophy.png">
            <img class="trophy5" id="trophy5" src="grey trophy.png">
        </div>
        <div class="row2">
            <img class="trophy6" id="trophy6" src="grey trophy.png">
            <img class="trophy7" id="trophy7" src="grey trophy.png">
            <img class="trophy8" id="trophy8" src="grey trophy.png">
            <img class="trophy9" id="trophy9" src="grey trophy.png">
            <img class="trophy10" id="trophy10" src="grey trophy.png">
        </div>
        <div class="row3">
            <img class="trophy11" id="trophy11" src="grey trophy.png">
            <img class="trophy12" id="trophy12" src="grey trophy.png">
            <img class="trophy13" id="trophy13" src="grey trophy.png">
            <img class="trophy14" id="trophy14" src="grey trophy.png">        
            <img class="trophy15" id="trophy15" src="grey trophy.png">
        </div>
    </div>
    <img class="cog-wheel"src="cog-wheel.png" onclick="settings()">
    <img id ="cat" src="cat eating.jpg" onclick="cat()">
    <!-- <table>
        <tr>
            <th>The big red button</th>
            <td>Op de rode knop klikken</td>
        </tr>
        <tr>
            <th>Camouflage</th>
            <td>De onzichtbare tekst gevonden</td>
        </tr>
        <tr>
            <th>Hacker</th>
            <td>Iets gevonden in de HTML pagina</td>
        </tr>
    </table> -->
</body>
</html>