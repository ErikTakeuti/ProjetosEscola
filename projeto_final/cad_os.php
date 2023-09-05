<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO OS</title>
    <link rel="stylesheet" href="css/style3.css">
    
</head>
<body>
<div class="container">
   <h2 class="titulo">Gerar ordem de Serviço</h2>
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
            
            echo "ID selecionado:" , $id_pesquisa,"<br>";
            $sql = "SELECT * FROM cliente WHERE id='$id_pesquisa'";
            $restultado = mysqli_query($con, $sql);
            while ($dados = mysqli_fetch_array($restultado)) {
       
                $imprimir_nome=$dados["nome"];
                $imprimir_cpf=$dados["cpf"];
           echo' 
           <tbody><tr>
              <td>  '.$dados['id'].'</td>
              <td> '.$tabela_nome=$imprimir_nome.'</td>
              <td> '.$tabela_cpf=$imprimir_cpf.'</td>
              </tr>
           </tbody>
           </table>
           
         ';
           
          }

echo '   
     <center><h3>Dados da Ordem de Serviço</h3></center>
     <hr>
    <div class="box">
       <form action="cad_os.php" method="post">
               <div class="inputs">         
                <b>Placa:</b><input type="text" name="placa">
                   
                       
                <b>Nome do Veículo:</b>   <input type="text" name="nome_veiculo">
                
                <b>Marca:</b>          
                <input type="text" name="marca">
                </div>
                   <div>
                   <b>Descrição 01:</b>          
                   <input type="text" name="descricao01">
                   <b>Valor 01:</b>          
                   <input type="text" name="valor01">
                </div>    
               
               
                <div>
                <b>Descrição 02:</b>          
                <input type="text" name="descricao02">
                   <b>Valor 02:</b>          
                   <input type="text" name="valor02">   
                 </div>
               

               <div>
               <b>Descrição 03:</b>          
               <input type="text" name="descricao03">
               <b>Valor 03:</b>          
               <input type="text" name="valor03">
                </div>
                <div>
                    <b>Mecânico:</b>
                    <select name="mecanico">
                    <option value="#">Mecanicos</option>
                        <option value="Carlos">Carlos</option>
                        <option value="Nicolas">Nicolas</option>
                        <option value="Leonardo">Leonardo</option>
                    </select>
                </div>
                <div>
                    <b>Mão de Obra:</b> <input type="text" id="tudo" placeholder="Valor da Mão de Obra" name="valor_mao_obra">
                </div>
               
               

             <button class="button"  type="submit" name="action">CADASTRAR
                   </button>
               
           </div> 
           
       </form>
    </div>
 


';
include './conexao.php';
           
           $placa        = @$dados['placa'];
           $nome_veiculo = @$dados['nome_veiculo'];
           $marca        = @$dados['marca']; 
           $descricao01=   @$dados['descricao01'];
           $valor01=@$dados['valor01'];
           $descricao02=@$dados['descricao01'];
           $valor02=@$dados['valor02'];
           $descricao03=@$dados['descricao03'];
           $valor03=@$dados['valor03'];
           $mecanico=@$dados['mecanico'];
           $valor_mao_obra=@$dados['valor_mao_obra'];

           $inserir = $con -> query("INSERT INTO ordem_servico VALUES
(0,'$imprimir_nome','$imprimir_cpf','$placa','$nome_veiculo','$marca','$descricao01','$valor01',
'$descricao02','$valor02','$descricao03',$'valor03','$mecanico','$valor_mao_obra')");

           if($inserir){
               echo "Cadastro efetuado";
           }else{
               
           }
         
         ?>
       </table>
        </div>
       
       
       <script>
           
       </script>
       
</body>
</html>