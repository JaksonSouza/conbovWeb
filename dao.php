<?php
include './connection.php';

function save(){
    $conn = getConnection();
    
    $nome = filter_input(INPUT_POST, 'nome');
    $pass = filter_input(INPUT_POST, 'pass');
    
    $sql = "insert into usuario(login,password) values('$nome','$pass');";    
    $conn->exec($sql);       
}

?>
