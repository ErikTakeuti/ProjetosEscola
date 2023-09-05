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
                    <h3 class="blue-text"> Cliente Selecionado </h3>
                    <table>
                        <thead>
                            <TR>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>CPF</th>
                            </TR>
                        </thead>
                        <?php
                        
                        include './conexao.php';
                        $id_pesquisa = @$_GET['id'];
                        echo "ID selecionado: ", $id_pesquisa, "<br>";
                        $sql = "SELECT * FROM cliente WHERE id='$id_pesquisa'";
                        $restultado = mysqli_query($conn, $sql);
                        while ($dados = mysqli_fetch_array($restultado)) {
                            $imprimir_n=@$dados['nome'];
                            $imprimir_c=@$dados['cpf'];
                            echo' 
                            <tbody>
                            <tr class="red-text">
                                <td> ' .$id_reserva   =  $dados['id']   .'</td>
                                <td> ' .$tabela_nome=$imprimir_n. '</td>
                                <td> ' .$tabela_cpf=$imprimir_c. '</td>
                              </tr>
                            </tbody>
                            </table>
                            ';
                            
                        }
                     
                            
                        echo ' 
                        <form action="cadastro_ordem_servico.php" method="post">
                            <div class="row"><!-- comment -->
                                <div class="col s2"><!-- comment -->
                                    <label>Placa</label>
                                    <input type="text" name="placa">
                                </div>
                                <div class="col s3"><!-- comment -->
                                    <label>Nome veículo</label>
                                    <input type="text" name="nome_veiculo">
                                </div>
                                
                                <div class="col s3"><!-- comment -->
                                    <label>Marca</label>
                                    <input type="text" name="marca">
                                </div>
                                
                                <div class="row">
                                <div class="col s6"><!-- comment -->
                                    <label>Descrição 01:</label>
                                    <input type="text" name="descricao01">
                                </div>
                                
                                <div class="col s2"><!-- comment -->
                                    <label>Valor 01:</label>
                                    <input type="text" name="valor01">
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col s6"><!-- comment -->
                                    <label>Descrição 02:</label>
                                    <input type="text" name="descricao02">
                                </div>
                                
                                <div class="col s2"><!-- comment -->
                                    <label>Valor 02:</label>
                                    <input type="text" name="valor02">
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col s6"><!-- comment -->
                                    <label>Descrição 03:</label>
                                    <input type="text" name="descricao03">
                                </div>
                                
                                <div class="col s2"><!-- comment -->
                                    <label>Valor 03:</label>
                                    <input type="text" name="valor03">
                                </div>
                                
                                <div class="col s4"><!-- comment -->
                                    
<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>

                                </div>

                                </div>
                            </div>
                        </form>
            ';

                        include './conexao.php';
                        $imprimir_nome=$imprimir_n;
                        $imprimir_cpf=$imprimir_c;
                        
                        $placa        = @$_POST['placa'];
                        $nome_veiculo = @$_POST['nome_veiculo'];
                        $marca        = @$_POST['marca'];
                        $descricao01  = @$_POST['descricao01'];
                        $valor01      = @$_POST['valor01'];
                        $descricao02  = @$_POST['descricao02'];
                        $valor02      = @$_POST['valor02'];
                        $descricao03  = @$_POST['descricao03'];
                        $valor03      = @$_POST['valor03'];
                        
                        echo "Nome escolhido: " .$imprimir_nome."<br>";
                        echo "cpf escolhido: " .$imprimir_cpf."<br>";
                        
                        $nome = $inserir = $conn->query("INSERT INTO ordem_servico VALUES
                                (0,'$imprimir_nome','$imprimir_cpf','$placa','$nome_veiculo','$marca','$descricao01',
                                '$valor01','$descricao02','$valor02','$descricao03','$valor03')");
                        
                        if($inserir){
                        echo 'Cadastro Efetuado';
                        }
                        
                        else {
                            echo 'Cadastro não efetuado';
                        }
                        
                        ?>


                        <!--Import jQuery before materialize.js-->
                        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">

                        </script>
                        <script type="text/javascript" src="js/materialize.min.js"></script>
                        </body>
                        </html>
