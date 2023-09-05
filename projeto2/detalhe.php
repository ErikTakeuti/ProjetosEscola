<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <table>
                <thead>
                    <th>ID</th>
                    <th>NOME COMPLETO</th>
                    <th>E-MAIL</th>
                    <th>SENHA</th>
                    <th>CPF</th>
                    <th>TELEFONE</th>
                    <th>ENDEREÇO</th>
                </thead>
                <?php 
                    include 'conexao.php';
                    $id_pesquisa = $_GET['id'];
                    echo"ID SELECIONADO: " , $id_pesquisa,"<br>";
                    $consulta="SELECT * FROM cliente WHERE id='$id_pesquisa'";
                    $resultado=mysqli_query($con,$consulta);
                    while($dados=mysqli_fetch_array($resultado)){
                ?>
                <tbody>
                <td><?php echo $dados['id']; ?></td>
                <td><?php echo $dados['nome_completo']; ?></td>
                <td><?php echo $dados['email']; ?></td>
                <td><?php echo $dados['senha']; ?></td>
                <td><?php echo $dados['cpf']; ?></td>
                <td><?php echo $dados['telefone']; ?></td>
                <td><?php echo $dados['endereco']; ?></td>
                </tbody>
                <?php }?>
            </table>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>