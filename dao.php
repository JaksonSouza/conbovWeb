<?php
include './connection.php';

function save(){
    $conn = getConnection();
    
    $sql = "";
    $conn->exec($sql);    
}

?>
