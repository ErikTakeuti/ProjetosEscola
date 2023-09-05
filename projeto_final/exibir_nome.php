<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>EXIBIR NOME</title>
      <style>
        body{ 
          display: block;
          justify-content:center;
          align-items: center;
          min-height: 5vh;
          background: #23242a;
        }
        .btn{
          position:relative;
          justify-items: center;
          border: none;
          outline: none;
          padding: 6px 15px;
          background: #fff;
          cursor: pointer;
          font-size: 0.8em;
          border-radius: 4px;
          font-weight: 600;
          width: 100px;
          margin-top: 10px;
        }
        h3{
          color:#ffffff;
          text-align:center;
        }
        h4{
          color:#ffffff;
          text-align:center;
        }
       .content-table{
          text-align: center;
          border-collapse: collapse;
          margin: 25px 0;
          font-size: 0.9em;
          min-width: 400px;
          border-radius:  5px 5px 0 0 ;
          overflow: hidden;
          box-shadow: 0 0 20px rgba(0, 0, 0, 15);
          justify-content:center;
       }
       .content-table  thead tr{
          background-color: #1c1c1c;
          color: #ffffff;
          text-align: left;
          font-weight: bold;
       }
       .content-table th,
       .content-table  td{
          padding: 12px 15px;
       }
       .content-table tbody tr{
          border-bottom: 1px solid rgba(0, 0,0, 0.91) ;
       }
       .content-table  tbody tr.active-row{
          font-weight:liberation-serif;
          color: #ffffff;
       }
       img{
          width: 35px;
          text-align: center;
       }
       td ,th{
          text-align: center;
          color: white;
       }
       form .user-details .input-box{
        margin-bottom: 20px;
        width: calc(100% / 2 - 20px);
       }
       .user-details .input-box .details{
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
      }
.user-details .input-box input{
    height: 40px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
    text-align:center;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color: gray;
}

      </style>
    </head>
    <body>
            <table>
                <h3><u>Pesquisar Nome<u></h3>
                
                    <div class=user-details>
                        <form action="exibir_nome.php" method="post">
                            <div class="input-box">
                                <input name="nome" type="text" placeholder="Digite um nome"><br>
                                <button class="btn" type="submit">Pesquisar</button>
                            <div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            <center> <u><h4>Todos os Cadastros</u></h4></center>
    <table class="content-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>DETALHES OS</th>
                <th>ADICIONAR OS</th>
              </tr>
        </thead>
        <?php 
        include 'conexao.php';
        $nome = @$_POST['nome'];
        $sql="SELECT * FROM cliente WHERE nome LIKE'%$nome%'";
        $resultado= mysqli_query($con,$sql);
        while($dados = mysqli_fetch_array($resultado)){
          ?>
    <tbody >
      <tr>
        <td><?php echo $dados['id']; ?></td>
        <td><?php echo $dados['nome']; ?></td>
         <td>
          <a href="detalhes.php?id=<?php echo $dados['id'] ?>">
          <img src="img/details.png" title="Detalhes OS">
          </a>   
        </td>
         <td>
          <a href="cad_os.php?id=<?php echo $dados['id'] ?>">
          <img src="img/adicionar.png" title="Adicionar OS">
          </a>   
        </td>
      </tr>
     <?php } ?>
    </tbody>
    </table>
        
        
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        