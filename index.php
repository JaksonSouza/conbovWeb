<?php
    include './dao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ConBov Web</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="nome" placeholder="login"/>
            <input type="password" name="pass" placeholder="senha"/>
            <input type="submit" value="login"/>          
        </form>
        <button onClick="window.location.href = 'cadastro.php';">Cadastrar</button>
        <?php
           if($_SERVER['REQUEST_METHOD']=='POST'){
               save();
           } 
        ?>
    </body>
</html>
