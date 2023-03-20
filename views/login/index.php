<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Site-PHP-MVC/src/css/login.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <form class="box-form">
            <header class="form-header">
                <h1>Login</h1>
            </header>
            <main class="form-main">
                <div class="form-input">
                    <input type="email" name="email" placeholder="Digite o seu E-mail">
                </div>
                <div class="form-input">
                    <input type="password" name="password" placeholder="Digite a sua Senha">
                </div>
            </main>
            <footer class="form-footer">
                <div class="form-submit">
                    <input type="submit" value="Enviar">
                </div>
            </footer>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/Site-PHP-MVC/src/js/login.js"></script>
</body>
</html>