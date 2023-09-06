<html>
    <head>
        <title>Recebe</title>
    </head>
    <body>
        <?php
            include './conexao.php';
            $nome=$_POST['nome'];
            $sobrenome=$_POST['sobrenome'];
            $cpf=$_POST['cpf'];
            $data_consulta=$_POST['data'];
            $horario_consulta=$_POST['tempo'];

            $inserir=$con->query("INSERT INTO paciente VALUES(0,'$nome',
            '$sobrenome','$cpf','$data_consulta','$horario_consulta')");
        ?>
    </body>
</html>