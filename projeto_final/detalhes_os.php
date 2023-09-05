<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <style>
      h3{
        color:#ffffff;
      }
      body{
    display: block;
    justify-content:center;
    align-items: center;
    min-height: 5vh;
    background: #23242a;
}
       .content-table{
            text-align: center;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            border-radius:  5px 5px 0 0 ;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 15);
       }
       .content-table  thead tr{
        background-color: #1c1c1c;
        color: #ffffff;
        text-align: left;
        font-weight: bold;

       }
       .content-table th,
       .content-table  td{
         padding: 12px 15px;
       }
       .content-table tbody tr{
        border-bottom: 1px solid rgba(0, 0,0, 0.91) ;
       }
       
       
       .content-table  tbody tr.active-row{
        font-weight:liberation-serif;
        color: #ffffff;
       }
       img{
         width: 35px;
       }
    </style>
</head>
<body>
    <center> <u><h3>Todos os Cadastros</u></h3></center>
    <table class="content-table">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>PLACA</th>
                <th>NOME DO VEICULO</th>
                <th>MARCA</th>
                <th>DESCRIÇÃO01</th>
                <th>VALOR:01</th>
                <th>DESCRIÇÃO02</th>
                <th>VALOR:02</th>
                <th>DESCRIÇÃO03</th>
                <th>VALOR:03</th>
                <th>MECANICO</th>
                <th>VALOR DA MÃO DE OBRA</th>

              </tr>
        </thead>
        <?php 
        include 'conexao.php';
        $sql="SELECT * FROM ordem_servico";
        $resultado= mysqli_query($con,$sql);
        while($dados = mysqli_fetch_array($resultado)){
          ?>
    <tbody >
        <div id="registros">
      <tr class="active-row">
        <td><?php echo $dados['id']; ?></td>
        <td><?php echo $dados['nome_cliente']; ?></td>
        <td><?php echo $dados['cpf_cliente']; ?></td>
        <td><?php echo $dados['placa']; ?></td>
        <td><?php echo $dados['nome_veiculo	']; ?></td>  
        <td><?php echo $dados['marca']; ?></td>
        <td><?php echo $dados['descricao01']; ?></td>
        <td><?php echo $dados['valor01']; ?></td>
        <td><?php echo $dados['descricao02']; ?></td>
        <td><?php echo $dados['valor02']; ?></td>
        <td><?php echo $dados['descricao03']; ?></td>
        <td><?php echo $dados['valor03']; ?></td>
        <td><?php echo $dados['mecanico']; ?></td>
        <td><?php echo $dados['valor_mao_obra']; ?></td>
        <td>
      </tr>
     <?php } ?>
    </div>  
    </tbody>
    </table>
</body>
</html>