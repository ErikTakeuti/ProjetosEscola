<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <?php
            include './menu.php';
        ?>
        <div class="container">
            <div class="row">
                <h3 style=color:#00b0ff light-blue accent-3>DADOS DO CLIENTE</h3>
                <div class="col s6">
                    <label>Nome: </label>
                    <input type="text" name="nome">
                </div>
                <div class="col s6">
                    <label>Sobrenome: </label>
                    <input type="text" name="sobre">
                </div>
                <div class="col s4">
                    <label>E-mail: </label>
                    <input type="text" name="email">
                </div>
                <div class="col s4">
                    <label>Rua: </label>
                    <input type="text" name="rua">
                </div>
                <div class="col s2">
                    <label>Bairro: </label>
                    <input type="text" name="bairro">
                </div>
                <div class="col s2">
                    <label>Cidade: </label>
                    <input type="text" name="cidade">
                </div>
                <button class="btn waves-effect waves-light #0091ea light-blue accent-4" type="submit" name="action">Submit
                    <i class="material-icons left">forward</i>
                </button>
            </div>
        </div>
        <?php
            include './footer.php';
        ?>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>