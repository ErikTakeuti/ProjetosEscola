<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style3.css">

    <title>CADASTRO</title>

</head>
<body>
    <div class="container">
        <div class="title">Cadastrar</div>
        <form action="recebe_cad_cliente.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nome Completo</span>
                    <input type="text" placeholder="Nome Completo" name="nome" required>
                </div> 
                <div class="input-box">
                    <span class="details">CPF</span>
                    <input type="text" id="cpf" onkeypress="maskcpf()" placeholder="CPF" name="cpf" maxlength="14" required>
                </div> 
                <div class="input-box">
                    <span class="details">E-mail</span>
                    <input type="text" placeholder="E-mail" name="email" required>
                </div> 
                <div class="input-box">
                    <span class="details">Endereço</span>
                    <input type="text" placeholder="Endereço" name="endereco" required>
                </div> 
                <div class="input-box">
                    <span class="details">Bairro</span>
                    <input type="text" placeholder="Bairro" name="bairro" required>
                </div> 
                <div class="input-box">
                    <span class="details">Telefone</span>
                    <input type="text" maxlength="13" onkeypress="masktef()" id="telefone" placeholder="Telefone" name="telefone" required>
                </div> 
                    <input type="submit" class="button" name ="butao" value="Enviar">
                    
            </div>
        </form>
    </div>
    <script>
        function maskcpf(){
            var cpf=document.getElementById("cpf").value.length;
            if(cpf==3){
                document.getElementById("cpf").value=document.getElementById("cpf").value+"."
            }
            if(cpf==7){
                document.getElementById("cpf").value=document.getElementById("cpf").value+"."
            }if(cpf==11){
                document.getElementById("cpf").value=document.getElementById("cpf").value+"-"
            }
        }
        function masktef(){
            var telefone=document.getElementById("telefone").value.length;
                if(telefone==0){
                    document.getElementById("telefone").value=document.getElementById("telefone").value+"("

                }
                if(telefone==3){
                    document.getElementById("telefone").value=document.getElementById("telefone").value+")"

                }
                if(telefone==8){
                    document.getElementById("telefone").value=document.getElementById("telefone").value+"-"

                }
        }
    </script>
</body>
</html>