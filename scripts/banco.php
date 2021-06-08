<?php

$servidor = "localhost";
$usuario = "root";
$senha = ""; 
$db = "db_cadastro";

#CRIANDO CONEXÃO COM O BANCO
$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

#CASO NÂO TENHA CONEXÃO
if(!$conexao){
    echo 'Erro ao conectar no servidor';
}

?>