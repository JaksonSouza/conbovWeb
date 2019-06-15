<?php

function getConnection(){
    $dsn = 'mysql:host=localhost:3306;dbname=conbovwebx;charset=utf8';
    $user = 'root';
    $pass = '';

    try{
        $pdo = new PDO($dsn, $user, $pass); 
        return $pdo;
        
    } catch (Exception $ex) {
        echo 'Erro: '.$ex->getMessage();
    } 
}

?>