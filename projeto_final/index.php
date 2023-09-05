<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/style2.css">
    
    <title>PRINCIPAL</title>

</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="index.php">Projeto OS Final</a></div>
            <ul class="links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="exibir_nome.php">Exibir Nome</a></li>
            </ul>

            <a href="cadastro.php" class="action_btn">Cadastro Cliente</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="exibir_nome.php">Exibir Nome</a></li>
            <li><a href="cadastro.php" class="action_btn">Cadastro Cliente</a></li>
        </div>
    </header>


    <main>
        <section id="hero">
            <h1>Bem-Vindo ao Sistema OS</h1>
            <p>Projeto Final</p>
        </section>
    </main>



    <script>
        const toggleBtn = document.querySelector('.toggle_btn');
        const toggleBtnIcon = document.querySelector('.toggle_btn i');
        const dropDownMenu = document.querySelector('.dropdown_menu');

        toggleBtn.onclick=function(){
            dropDownMenu.classList.toggle('open');
            const isOpen = dropDownMenu.classList.contains('open');

            toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        }
    </script>
</body>
</html>