<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            p{
                text-align: justify;
            }
  </style>


        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

            <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
    <?php
     include './menu.php';
    
    ?>
    <hr>
  <div class="container">
    <div class="row">
        <div class="col s4">
            <form action="exibir.php" method="post">
            <label>Nome de pesquisa:</label>
                <input type="text" name="nome_pesquisa">
        </div>
        <div class="col s4">
        
                 <button class="btn waves-effect waves-light" type="submit" name="action">Pesquisar
    <i class="material-icons right">send</i>
                 </button></form>
                </div>
                
            </div>
      <h6 class="blue-text lighten-5">Clientes cadastrados: </h6>
            <table>
                <thead class="">
                <th>ID</th>
                <th>Nome</th>
                </thead>
                <?php
                include './conexao.php';
                $nome_pesquisa = @$_POST['nome_pesquisa'];
                
                $sql = "SELECT * FROM cliente WHERE nome LIKE '%".$nome_pesquisa."%'";
                $restultado = mysqli_query($conn, $sql);
                while ($dados = mysqli_fetch_array($restultado)) {
                    ?>
                <tbody>
                    <td><?php echo $dados['id']; ?></td>
                    <td><?php echo $dados['nome']; ?></td>
                    <td> 
                      <a href="detalhe.php?id=<?php echo $dados['id'] ?>">
                        <i class="material-icons prefix">format_list_bulleted</i> 
                      </a>   
                    </td>
                    
                    <td> 
                      <a href="cadastro_ordem_servico.php?id=<?php echo $dados['id'] ?>">
                          <i class="material-icons prefix" title="ADD OS">add_circle</i> 
                      </a>   
                    </td>
                    
                    
                </tbody>
                <?php } ?>
            </table>
        </div>



        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">

        </script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
