<?php
include './connection.php';

function save(){
    $conn = getConnection();
    
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $login = filter_input(INPUT_POST, 'login');
    $senha = filter_input(INPUT_POST, 'senha');
    
    $sql = "insert into usuario(nome,login,password,email) values('$nome','$login','$senha','$email');";    
    $conn->exec($sql);
    
    echo '<br>Gravado no banco.';
}

?>
