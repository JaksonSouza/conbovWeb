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
        <h1>Cadastro</h1>
        <form method="POST">
            <input type="text" name="nome" placeholder="nome"/><br><br>
            <input type="text" name="email" placeholder="E-mail"/><br><br>
            <input type="text" name="login" placeholder="login"/><br><br>
            <input type="password" name="senha" placeholder="senha"/><br><br>
            <input type="submit" value="Cadastrar"/>          
        </form>
        <?php
           if($_SERVER['REQUEST_METHOD']=='POST'){
               save();
           } 
        ?>
    </body>
</html>

