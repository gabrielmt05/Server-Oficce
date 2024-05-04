<?php
session_start();
require_once __DIR__ . '/config/Helpers.php';
require_once __DIR__ . '/views/cliente/login.php';

use App\config\Database;

$conn = Database::getConnection();
var_dump($conn);
echo "sessao";
var_dump($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        if($_SESSION['username']){
            echo "voce já está logado";
        }else {?>
            <a href="views/cliente/login.php">Fazer Login</a></p>
        <?php } ?>
</body>
</html>