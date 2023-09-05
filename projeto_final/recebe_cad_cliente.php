<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        function ok(){
        setTimeout("window.location='index.php'",2000);
        }
            
        function erro(){
        setTimeout("window.location='cadastro.php'",2000);
        }
    </script>
</head>
<body>
    

<?php
    include "./conexao.php";

    $nome = $_POST['nome'];
    $cpf=$_POST['cpf'];
    $email=$_POST['email'];
    $endereco=$_POST['endereco'];
    $bairro=$_POST['bairro'];
    $telefone=$_POST['telefone'];

    $inserir = $con -> query("INSERT INTO cliente VALUES(0,'$nome','$cpf','$email','$endereco','$bairro','$telefone')");

    if($inserir){
        echo  '<script>ok()</script>';
        echo" <hr><br><p>Cliente cadastrado com sucesso!!</p><br><hr>";
    }else{
        echo '<script> erro() </script>';
        echo" <hr><br><p>Cliente não cadastrado</p><br><hr>";
    }
?>
</body>
</html>