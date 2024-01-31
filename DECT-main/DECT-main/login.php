
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<div>
    <div class="login">
        <h3>Login</h3>
        <!--het zichtbare login systeem.-->
        <form method="post" action="" name="login">
            <input type="text" name="username" autocomplete="off" placeholder="Username*" />
            <input type="password" name="password" autocomplete="off" placeholder="Password*" /> <br>
            <input type="submit" class="button" name="login" value="Login">
            <a href="signup.php">Register</a>
        </form>
    </div>
</div>

    <!--laat de copyright weer zien-->
    <?php include_once 'footer.php';?>
    <?php
    //dit stuk activeert de database
    session_start();
   echo $_SESSION['loggedInUser'];
$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";
try {
    $conn = new PDO(
        "mysql:host=$servername;dbname=logininfo", 
        $username, 
        $password
    );
    //dit stuk pakt de ingevoerde naam en wachtwoord, en checked of ze in de database staan.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT username, password, id FROM users;";
    $output = $conn->query($sql);
    $rows = $output->fetchAll(PDO::FETCH_ASSOC); 
    
    if (isset($_POST['username'])) { 
        $naam = $_POST['username'];
        $wachtwoord = $_POST['password'];
        echo "$naam". "<br>";
        echo "$wachtwoord". "<br>";
    }
    if (isset($_POST['username'])) {
    $succes = false;
    foreach ($rows as $value) {
    if ($value['username'] == $naam && $value['password'] == $wachtwoord) {
        $succes = true;
        $_SESSION['loggedInUser'] = $value['id'];
    } 
    }
    if ($succes == 1) {
        header("Location: main_game.php");
    } else {
        echo "login failed";
    }
}   
    } catch (PDOException $e) {

    }
?>
</body>

</html>
