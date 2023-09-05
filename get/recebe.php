<?php
    include './conexao.php';
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_servico = $_POST['data_servico'];
    $situacao = $_POST['situacao'];

    $inserir = $con -> query("INSERT INTO ordem_servico VALUES(0,'$nome','$cpf','$data_servico','$situacao')");

    if($inserir){
        echo'CADASTRO REALIZADO';
        echo'<a href="cadastro.php"><p><br><hr>voltar<hr></a></p>';
    }
    else{
        echo'CADASTRO NÃO REALIZADO';
        echo'<a href="cadastro.php"><p><br><hr>voltar<hr></a></p>';
    }
?>