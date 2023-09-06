<!DOCTYPE html>
<html>
    <head>
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

        <form action="recebe.php" method="post">
            <div class="container">
                <h6 class="blue-text lighten-5">  <i class="material-icons">group_add</i>
                Cadastro de Clientes</h6>
                <div class="row">

                    <div class="col s6">
                        <label>Nome:</label>
                        <input type="text" name="nome">
                    </div>
                    <div class="col s2">
                        <label>CPF:</label>
                        <input type="text" name="cpf">
                    </div>
                    
                    <div class="col s2">
                        <label>E-mail:</label>
                        <input type="text" name="email">
                    </div>
                    
                    <div class="col s4">
                        <label>Endereço:</label>
                        <input type="text" name="endereco">
                    </div>
                    
                    <div class="col s4">
                        <label>Bairro:</label>
                        <input type="text" name="bairro">
                    </div>
                    
                    <div class="col s2">
                        <label>Telefone:</label>
                        <input type="text" name="telefone">
                    </div>

                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Cadastrar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>     
        </form>


        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>



