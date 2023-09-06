<?php
include './conexao.php';
$nome       = $_POST['nome'];
$cpf        = $_POST['cpf'];
$email      = $_POST['email'];
$endereco   = $_POST['endereco'];
$bairro     = $_POST['bairro'];
$telefone   = $_POST['telefone'];


$inserir = $conn->query("INSERT INTO cliente VALUES
(0,'$nome','$cpf','$email','$endereco','$bairro','$telefone')");

if ($inserir) {
    echo 'Cadastro REALIZADO';
    print '\n Redirecionando...\n ';
    header ('Refresh:3; URL=cadastro.php');
    echo '<a href="cadastro.php"><p><br><hr>voltar<hr></a></p>';
} else {
    echo 'Cadastro Não REALIZADO';
    print '\n Redirecionando... \n';
    header ('Refresh:3; URL=cadastro.php');
    echo '<a href="cadastro.php"><p><br><hr>voltar<hr></a></p>';
}

