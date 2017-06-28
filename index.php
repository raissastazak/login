<?php

    session_start();
    if(!isset($_SESSION['usuario_online']) OR !($_SESSION['usuario_online'] == true) ){
        //usuario off
        header('Location: login.php');
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>

    <div class="social">

        <a href="verifica_usuario.php?evento=sair" class="sair">sair</a>

        <img src="https://pbs.twimg.com/profile_images/876168623471177729/SzJVE6K-_400x400.jpg" alt="" width="200" height="200">
        <h3>Bem vindo!</h3>
    </div>

</body>
</html>