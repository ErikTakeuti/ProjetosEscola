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
    <h3>Clientes cadastrados</h3>
    <table>
        <thead>
            <th>ID</th>
            <th>NOME</th>
        </thead>
        <?php
            include 'conexao.php';
            $sql="SELECT * FROM ordem_servico";
            $resultado=mysqli_query($con,$sql);
            while($dados=mysqli_fetch_array($resultado)){
        ?>
        <tbody>
            <td><?php echo $dados['id']; ?></td>
            <td><?php echo $dados['nome']; ?></td>
            <td>
                <a href="detalhe.php?id=<?php echo $dados['id']; ?>"> 
                <i class="material-icons prefix">format_list_bulleted</i>
            </a>
            </td>
            
        </tbody>
       <?php } ?>
    </table>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>