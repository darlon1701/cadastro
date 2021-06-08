<?php

$servidor = "localhost";
$db = "db_cadastro";
$usuario = "root";
$senha = "123"; 


$conexao = mysqli_connect($servidor, $db, $usuario, $senha);

if(!$conexao){
    echo 'Erro ao conectar no servidor';
}

?>