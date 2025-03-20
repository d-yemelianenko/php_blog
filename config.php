<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'php_blog';
try {
    $pdo = new PDO("mysql:host=$server; dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
    echo $pdo . "<br>" . $e->getMessage();
}
