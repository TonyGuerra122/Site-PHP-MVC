<?php
session_start();
if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])){
    header("Location: /Site-PHP-MVC/views/login/");
}
include($_SERVER['DOCUMENT_ROOT'] . "/Site-PHP-MVC/models/Usuarios.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <button type="button" onclick="deslogar()">Sair</button>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/Site-PHP-MVC/src/js/index.js"></script>
</body>
</html>