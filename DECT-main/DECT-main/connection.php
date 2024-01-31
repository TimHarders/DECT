//dit activeert de database, zodat het te gebruiken is voor de rest van de site.
<?php
$host = '127.0.0.1';
$db = 'logininfo';
$user = 'bit_academy';
$pass = 'bit_academy';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
    $pdo = new PDO($dsn, $user, $pass, $options);
