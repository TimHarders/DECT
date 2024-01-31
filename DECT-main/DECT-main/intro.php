<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="signup"> 
    <h1>Touch every thing</h1>
    //dit brengt de user naar login.
    <div class="menu_login" href="./login.php">
        <a href="./login.php" class="button">login</a>
    </div>  
    //dit brengt de user naar sign up.
    <div class="menu_signup" href="./signup.php">
        <a href="./signup.php" class="button">signup</a>
    </div>  
    </div>
   //dit voegt de copyright onderin toe.
    <?php include_once 'footer.php';?>
</body>
</html>
