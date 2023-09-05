<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <title>EXIBIR NOME</title>
    </head>
  
    <body>
            <div class="z-depth-4" id="tabela">
            
            
            
            <table>
                <H3>Pesquisar por Nome<br>
                
                    <div class="row">
                        <form action="exibir_nome.php" method="post">
                            <div class="input-field col s6">
                                <input id="first_name" name="nome" type="text" class="validate">
                               <label for="first_name">PESQUISAR POR NOME</label>
                            </div>
                            
                                <div class="input-field col s3">
                            <!--button-->
                                <button class="btn waves-effect waves-light #00695c teal darken-3 medium" type="submit" >Pesquisar
                                    <i class="material-icons right medium">send</i>
                                </button>
                                    <div class="input-field col s6">
                            
                        </form>
                    </div>
                </div>
            </div>
                   
            
            <thead class="efeito">
              <tr>
                
                <th>ID</th>
                <th>NOME COMPLETO</th>
                
               </thead>
              <?php 
                include './conexao.php';
                $nome = $_POST['nome'];
                
                $sql= "SELECT * FROM cliente WHERE nome_completo='$nome'";
                $resultado= mysqli_query($con,$sql);
                while($dados = mysqli_fetch_array($resultado)){
                  ?>
            <tbody class="efeito" border="1">
              <tr>
                <td><?php echo $dados['id']; ?></td>
                <td><?php echo $dados['nome_completo']; ?></td>
                <td>
                  <a href="detalhe.php?id=<?php echo $dados['id']; ?>"> 
                  <i class="material-icons prefix">format_list_bulleted</i>
                </a>
                </td>
              </tr>
             <?php } ?>     
            </tbody>
          </table>
        </div>
        
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        