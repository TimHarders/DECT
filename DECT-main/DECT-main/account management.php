<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account management</title>
    <link rel="stylesheet" href="account management.css">
    <script src="account management.js"></script>
</head>
<body>
    <form method="POST">
    <img class="tree" src="account background.png">
    <img class="cog-wheel"src="cog-wheel.png" onclick="settings()">
    <div class="h1">
    <h1>Naam veranderen</span></h1>
    <input type="text" id="nameChange" class="nameChange"><br>
    <input type ="button" value="Naam veranderen"><br>
    <h1>Prestatie reset</h1>
    <input type="text" id="prestatieReset" class="prestatieReset"><br>
    <input type ="button" value="Prestatie resetten"><br>
    <h1>Account reset</span> <br>
    <input type="text" id="accountReset" class="accountReset"><br>
    <input type="button" value="Account resetten"><br>
    <h1>Account deleten</span></h1>
    <input type="text" id="accountDelete" class="accountDelete"><br>
    <input type="button" value="Account deleten">
    </div>
    </form>

    <?php
    session_start();
    $servername = "localhost";
    $username = "bit_academy";
    $password = "bit_academy";
    
    $nameChange = "nameChange";
    $prestatieReset = "prestatieReset";
    $accountReset ="accountReset";
    $accountDelete = "accountDelete";


    try {
        $conn = new PDO(
            "mysql:host=$servername;dbname=logininfo", 
            $username, 
            $password
        );
        $resetAchievements = "ALTER TABLE users TRUNCATE $prestaties";
        $changeName = "ALTER TABLE users CHANGE $username";
        $deleteAccount = "ALTER TABLE users DROP $username AND $password";
        $resetAccount = "ALTER TABLE users TRUNCATE $username AND $password";        
    } catch(PDOException $e) {

    }
    ?>
</body>
</html>