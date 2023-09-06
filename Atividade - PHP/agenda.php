<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper blue lighten-3">
                <a href="#" class="brand-logo center">SITE</a>
                <ul class="right">
                    <li><a href="agenda.php">Agenda</a></li>
                    <li><a href="consulta.php">Consulta</a></li>
                    <li><a href="Localizacao.php">Localização</a></li>
                </ul>
            </div>
        </nav>
    <form action="recebe.php" method="POST">
    <div class="container">
        <h3>Agendamento de Pacientes:</h3>
            <div class="row">

                <div class="col s6">
                    <span>Nome do Paciente</span>
                    <input type="text" name="nome">
                </div>
                <div class="col s6">
                    <span>Sobrenome do Paciente</span>
                    <input type="text" name="sobrenome">
                </div>
                <div class="col s3">
                    <span>CPF do Paciente</span>
                    <input type="text" name="cpf">
                </div>
                <div class="col s3">
                    <span>Data da Consulta</span>
                    <input type="date" name="data">
                </div>
                <div class="col s3">
                    <span>Horário da Consulta</span>
                    <input type="time" name="tempo">
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                    <i class="material-icons right">check</i>
                </button>
            
            </div>
        </form>
    </div>

    <footer class="page-footer blue">
        <form action="recebe.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">SITEa</h5>
                    <p class="grey-text text-lighten-4">Erik Takeuti & Antônio Carlos</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Erik & Carlos
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </form>
    </footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>