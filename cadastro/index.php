<?php

    include('config.php');
    Mysql::instagram();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="form.css" rel="stylesheet">
    <title>Formulario</title>
</head>
<body>
    <div class="form_cd">
        <h2>Cadastro de Usuario</h2>
        <form method="POST">
            <div><input type="text" name="nome" placeholder="Nome" required></div>
            <div><input type="email" name="email" placeholder="E-mail" required></div>
            <div><input type="password" name="senha" placeholder="Senha" required></div>
            <div><input type="submit" name="acao" value="Cadastrar"></div>
            <input type="hidden" name="form" value="f_form">
        </form>
    </div>
</body>
</html>
