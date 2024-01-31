<!DOCTYPE html>
<html lang="en">

<head>
    <title>signup</title>
    <link rel="stylesheet" href="styles.css">
    <script src="validation.js" defer></script>

</head>

<body>
<div>
    <div class="signup">
        <div class="return">
        </div>
        <h3>Register</h3>
        <form method="POST" name="signup" id="forum">
            <input type="text" name="username" id="username" autocomplete="off" placeholder="Username*" /> <br>
            <div class="usernameerror">
                <span id="UsernameError"></span>
            </div>
            <input type="password" name="password" id="password"autocomplete="off" placeholder="Password*" /> 
            <div class="passworderror">
                <span id="PasswordError"></span>
            </div>
            <input type="button" class="button" name="signup" id="signup" value="Register" onclick="validation()">
            <a href="login.php">Login</a>
        </form>
    </div>
</div>

    <?php include_once 'footer.php';?>
<?php
    
include_once('connection.php');
if (isset($_POST['buttons'])) {
    header("Location: login.php");
}
if (isset($_POST['username']) && isset($_POST['password']) ) { 
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $password;
    echo $username;
    //
    $query = $pdo->prepare("INSERT INTO users (username,password) VALUES (:username,:password)"); // REGISTER QUERY

    $query->bindParam(':username', $username); // BIND :USERNAME NAAR $USERNAME
    $query->bindparam(':password', $password);
    //
    $query->execute();
    //
   // $user = $query->fetch(); // ARRAY MET DE VALUES VAN DE FETCH
} 
?>
</body>

</html>