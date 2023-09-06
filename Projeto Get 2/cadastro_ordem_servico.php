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
<div class="container">
    <h5 class="blue-text lighten-5">Gerar ordem de Serviço</h5>
    <div class="row">
        <div class="col s12">
        <table>
            <thead>
               <th>ID</th>
               <th>Nome</th>
               <th>CPF</th>
            </thead>
        <?php
             include './conexao.php';
             
             $id_pesquisa = @$_GET['id'];
             
             echo "ID selecionado: " , $id_pesquisa,"<br>";
             $sql = "SELECT * FROM cliente WHERE id='$id_pesquisa'";
             $restultado = mysqli_query($conn, $sql);
             while ($dados = mysqli_fetch_array($restultado)) {
        
            echo' 
            <tbody>
               <td>  '.$dados['id'].'</td>
               <td> '. $dados['nome'].'</td>
               <td> '. $dados['cpf'].'</td>
            </tbody>
            
          ';
            
           

echo '   
      <h3 class="blue-text lighten-5">Dados da Ordem de Serviço:</h3>    
        <form action="cadastro_ordem_servico.php" method="post">
            <div class="row">
                <div class="col s4">
                    <label>Placa</label>          
                    <input type="text" name="placa">
                </div>    
                
                <div class="col s6">
                    <label>Nome do veículo</label>          
                    <input type="text" name="nome_veiculo">
                </div>    
                
                <div class="col s4">
                    <label>Marca</label>          
                    <input type="text" name="marca">
                </div>   
                </div>
                
 <h4 class="red-text"><i class="material-icons">assignment_ind</i><label class="red-text">Dados da Ordem de Serviço</label></h4>

        <div class="row">
                <div class="col s6">
                    <label>Descrição 01: </label>          
                    <input type="text" name="descricao01">
                </div>   
                <div class="col s4">
                    <label>Valor  01: </label>          
                    <input type="text" name="valor01">
                </div>   
        </div>
        <div class="row">
                <div class="col s6">
                    <label>Descrição 02: </label>          
                    <input type="text" name="descricao02">
                </div>   
                <div class="col s4">
                    <label>Valor  02: </label>          
                    <input type="text" name="valor02">
                </div>   
        </div>
        <div class="row">
                <div class="col s6">
                    <label>Descrição 03: </label>          
                    <input type="text" name="descricao03">
                </div>   
                <div class="col s4">
                    <label>Valor  03: </label>          
                    <input type="text" name="valor03">
                </div>   
        </div>

              <button class="btn waves-effect waves-light" type="submit" name="action">
                        Cadastrar
                        <i class="material-icons right">send</i>
                    </button>
            </div> 
        </form>
  


';
include './conexao.php';
            $nome_cliente = $dados['nome'];
            $cpf_cliente = $dados['cpf'];
            
            $placa        = @$dados['placa'];
            $nome_veiculo = @$dados['nome_veiculo'];
            $marca        = @$dados['marca'];
            
            $descricao1    = @$dados['descricao01'];
            $valor1        = @$dados['valor01'];
            $descricao2    = @$dados['descricao02'];
            $valor2        = @$dados['valor02'];
            $descricao3    = @$dados['descricao03'];
            $valor3        = @$dados['valor03'];
            
            
$inserir = $conn -> query("INSERT INTO ordem_servico VALUES
(0,'$nome_cliente','$cpf_cliente','$placa','$nome_veiculo','$marca',
   '$descricao1','$valor1','$descricao2','$valor2','$descricao3',
   '$valor3')");

            if($inserir){
                echo "Cadastro efetuado";
            }else{
                
            }
          
             }  ?>
        </table>
        </div
        
        
        
        
        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">
      
      </script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>