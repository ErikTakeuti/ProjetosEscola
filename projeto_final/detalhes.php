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
            justify-content:center;
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
         text-align: center;
       }
       td ,th{
         text-align: center;
       }
       table{
          table-layout: fixed;
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
                <th>EMAIL</th>
                <th>ENDEREÇO</th>
                <th>BAIRRO</th>
                <th>TELEFONE</th>
                <th>CADASTRAR_OS</th>
              </tr>
        </thead>
        <?php 
        include 'conexao.php';
        $sql="SELECT * FROM cliente";
        $resultado= mysqli_query($con,$sql);
        while($dados = mysqli_fetch_array($resultado)){
          ?>
    <tbody >
        <div id="registros">
      <tr class="active-row">
        <td><?php echo $dados['id']; ?></td>
        <td><?php echo $dados['nome']; ?></td>
        <td><?php echo $dados['cpf']; ?></td>
        <td><?php echo $dados['email']; ?></td>
        <td><?php echo $dados['endereco']; ?></td>  
        <td><?php echo $dados['bairro']; ?></td>
        <td><?php echo $dados['telefone']; ?></td>
         <td>
         <a href="cad_os.php?id=<?php echo $dados['id'] ?>">
        <img src="img/cados.png" title="cadastrar os">
          </a>   
        </td>
      </tr>
     <?php } ?>
    </div>  
    </tbody>
    </table>
</body>
</html>