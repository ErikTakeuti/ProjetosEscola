    <!DOCTYPE html>
    <html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        
        <?php
        include'./menu.php';
        include'./conexao.php';
        $cliente=$_POST['nome_cliente'];
        $cpf=$_POST['cpf'];
        $endereco=$_POST['endereco'];
        $n_sereie=$_POST['n_serie_marquina'];
        $marca=$_POST['marca'];
        $modelo=$_POST['modelo'];
        $dt_recebimento=$_POST['dt_recebimento'];
        $valor_pecas=$_POST['valor_pecas'];
        $valor_mao_obra=$_POST['valor_mao_obra'];
        $dt_entrega=$_POST['dt_entrega'];
        $tecnico=$_POST['nome_tecnico'];
        
        $inserir = $mysqli -> query("INSERT INTO oredem_servico VALUES('0',$cliente','$cpf','$endereco','$n_sereie','$marca','$modelo',
        '$dt_rcebimento','$valor_pecas','$valor_mao_obra','$valor_pecas','$tecnico')");
        ?>
        <h6>Pagina de recebe</h6>


        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
    </html>