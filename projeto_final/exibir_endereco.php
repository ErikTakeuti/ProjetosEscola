<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <title>EXIBIR ENDEREÇO</title>
    </head>
  
    <body>
            <div class="z-depth-4" id="tabela">
            
            
            
            <table>
                <H3>Pesquisa Endereço<br>
                
                    <div class="row">
                        <form action="exibir_endereco.php" method="post">
                            <div class="input-field col s6">
                                <input id="endereco" name="endereco" type="text" class="validate">
                               <label for="endereco">PESQUISA POR ENDEREÇO</label>
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
                <th>E-MAIL</th>
                <th>SENHA</th>
                <th>CPF</th>
                <th>RG</th>
                <th>TELEFONE</th>
                <th>ENDEREÇO</th>
                
               </thead>
              <?php 
                include './conexao.php';
                $endereco = $_POST['endereco'];
                
                $sql= "SELECT * FROM cliente WHERE endereco='$endereco'";
                $resultado= mysqli_query($con,$sql);
                while($dados = mysqli_fetch_array($resultado)){
                  ?>
            <tbody class="efeito" border="1">
              <tr>
                <td><?php echo $dados['id']; ?></td>
                <td><?php echo $dados['nome_completo']; ?></td>
                <td><?php echo $dados['email']; ?></td>
                <td><?php echo $dados['senha']; ?></td>
                <td><?php echo $dados['cpf']; ?></td>
                <td><?php echo $dados['rg']; ?></td>
                <td><?php echo $dados['telefone']; ?></td>
                <td><?php echo $dados['endereco']; ?></td>  
              </tr>
             <?php } ?>     
            </tbody>
          </table>
        </div>
        
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        