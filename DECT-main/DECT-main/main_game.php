
<?php
session_start();
    if (!isset($_SESSION['loggedInUser'])) {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="game.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" name="alles">
    <div class="scherm">
        <p class="onzichtbare_knop">4826</p>
        <div class="links">
            <input type="number" id="code" name="code">
            <input type="submit" id="code_submit" name="code_submit"  value="submit">
        </div>
        <div class="midden">
            <button class="rode_knop" onclick="rode_knop()">knop</button>
        </div>
        <button onclick="location.href='settings.html'"><img src="cog-wheel.png" class="settings"></button>
        </form>
        <script src="skript.js"></script>
    </div>
    <?php
    include_once('connection.php');
    $user = $_SESSION['loggedInUser'];
    if (isset($_POST['code'])) {
    $code = $_POST['code'];
    switch ($code) {
        case "4826":
          $query = $pdo->prepare("UPDATE users SET achievement1 = true WHERE id = '$user'");
          $query->execute();
          break;
        case "5004":
          $query1 = $pdo->prepare("UPDATE users SET achievement2 = true WHERE id = '$user'");
          $query1->execute();
          break;
        case "4300":
          $query2 = $pdo->prepare("UPDATE users SET achievement3 = true WHERE id = '$user'");
          $query2->execute();
          break;
      }
    }
    ?>
    </body>
</html>