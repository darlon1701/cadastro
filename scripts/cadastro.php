<?php
    include '../scripts/banco.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $idade = $_POST['idade'];

    $query = "INSERT INTO usuario(nome, email, telefone, idade) VALUES('$nome', '$email', '$telefone', '$idade')";

        #echo $query;

        
        mysqli_query($conexao, $query);

        
        #header('location:../index.php');


?>

<body>
    PARABENS VC ENTROU
</body>