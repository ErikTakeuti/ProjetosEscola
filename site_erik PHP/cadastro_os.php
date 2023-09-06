<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <?php include './menu.php'; ?>
        <?php include './conexao.php'; ?>

        <form action="recebe_os.php" method-="post">
        <!-- DIV CONTAINER -->
        <div class="container">
            
            <h6>CADASTRO DE ORDEM E SERVIÇO</h6>
            <!-- DIV ROW 1 -->
            <div class="row">

                <div class="col s4">
                    <label> 
                        <i class="material-icons">account_circle</i>
                        NOME DO CLIENTE
                    </label>
                    <input type="text" name="nome_cliente">
                </div>

                <div class="col s2">
                    <label >
                        <i class="material-icons">contacts</i>
                        CPF DO CLIENTE
                    </label>
                    <input type="text" name="cpf">
                </div>

                <div class="col s4">
                    <label>
                        <i class="material-icons">domain</i>
                        ENDEREÇO DO CLIENTE
                    </label>
                    <input type="text" name="endereco">
                </div>
                <!-- FECHANDO A DIV ROW 1  -->
            </div>


            <h6>DADO DOS EQUIPAMENTOS</h6>
            <!-- DIV ROW 2 -->
            <div class="row">
                
                <div class="col s2"> 
                <label>
                    <i class="material-icons">looks_one</i>
                    NºSERIE
                </label>
                    <input type="text" name="n_serie_marquina">
                </div>

                <div class="col s4"> 
                <label>
                    <i class="material-icons">whatshot</i>
                    MARCA
                </label>
                    <input type="text" name="marca">
                </div>

                <div class="col s6"> 
                <label>
                    <i class="material-icons">toys</i>
                    MODELO	
                </label>
                    <input type="text" name="modelo">
                </div>

            </div>
            <!-- FECHANDO A DIV ROW 2  -->


            <h6>DATAS</h6>
            <!--  DIV ROW 3  -->
            <div class="row">

                <div class="col s6"> 
                <label>
                    <i class="material-icons">event_available </i>
                    DATA DE ENTREGA
                </label>
                    <input type="date" name="dt_entrega">
                </div>

                <div class="col s6"> 
                <label>
                    <i class="material-icons">event_busy</i>
                    DATA DE RCEBIMENTO
                </label>
                    <input type="date" name="dt_recebimento">
                </div>

            </div> 
            <!-- FECHANDO A DIV ROW 3  -->


            <h6>VALORES</h6>
            <!--  DIV ROW 4  -->
            <div class="row">

                <div class="col s6"> 
                <label>
                    <i class="material-icons">build</i>
                    VALOR PEÇAS
                </label>
                    <input type="text" name="valor_pecas">
                </div>

                <div class="col s6"> 
                <label>
                    <i class="material-icons">account_box</i>
                    VALOR MÃO DE OBRA
                </label>
                    <input type="text" name="valor_mao_obra">
                </div>

            </div> 
            <!-- FECHANDO A DIV ROW 4  -->


            <h6>TÉCNICO</h6>
            <!--  DIV ROW 5  -->
            <div class="row">

                <div class="col s12"> 
                <label>
                    <i class="material-icons">build</i>
                    NOME DO TÉCNICO
                </label>
                    <input type="text" name="nome_tecnico">
                </div>

            </div> 
            <!-- FECHANDO A DIV ROW 5  -->

            <button class="btn waves-effect waves-light" type="submit" name="action">ENVIAR
                <i class="material-icons right">send</i>
            </button>
        
        
        </div>
        <!-- FECHANDO A DIV COUNTAINER -->
        </form>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
