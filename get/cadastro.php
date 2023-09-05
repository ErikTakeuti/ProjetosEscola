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
    <form action="recebe.php" method="post">
        <h2>Cadastro de Clientes</h2>
        <div class="row">
            
        <div class="col s6">
            <label>Nome</label>
            <input type="text" name="nome">
        </div>
            
        <div class="col s2">
            <label>CPF</label>
            <input type="text" name="cpf">
        </div>
            
        <div class="col s2">
            <label>Data Serviço</label>
            <input type="date" name="data_servico">
        </div>
            
        <div class="col s2">
            <label>Situação</label>
            <input type="text" name="situacao">
        </div>
        
        <input type="submit" value="ENVIAR">
    </div>
    </form>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>