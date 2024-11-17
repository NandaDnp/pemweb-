<?php

session_start();
if($_SESSION['role'] ≠ 'user') {
    session_destroy();
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang admin</h1>
    <a href="./backend/logout.php"</a>
</body>
</html>