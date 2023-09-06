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
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <?php require('conexao.php')?>
    <form action="login.php" method="POST">
        <label for="">Login: </label> <input type="text" id="login" name="login">
        <br><br><label for="">Senha: </label> <input type="text" id="senha" name="senha">
        <br><br><input type="submit" value="Cadastrar" name="enviar">
    </form>
    <?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $inserir = $con -> query("INSERT INTO cad VALUES ("$login","$senha")");
    ?>
    </body>
  </html>
        