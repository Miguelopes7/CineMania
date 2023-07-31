<?php
    // Para o form inscrever email
    session_start();
    unset($_SESSION['user']); // limpar conteúdo da variavel

    $mensagemFeedback = "";
    if(isset($_POST['btn_submit'])){ // ao carregar no submit
        RegistarEmail(); //Função presente no fundo desta página
    }
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineMania</title>

    <!-- ÍCONE -->
    <link rel="icon" href="imagens/movie_board_icon-removebg.png" type="image/x-icon">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Fancybox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

    <!-- YouTube Player API -->
    <script src="https://www.youtube.com/iframe_api"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css">

    <!-- JS -->
    <script src="app.js"></script>
    
</head>
<body>
    <header class="container-fluid d-md-block">
        <div class="row">
            <div class="col-9 banner d-flex align-items-center justify-content-center">
                <!--<h4>CineMania</h4>-->
            </div>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid" id="linha_nav"> 
            <a class="navbar-brand" href="sobrenos.php">
                <img src="imagens/movie board icon.png" alt="" class="img-fluid"> 
            </a>
            <button class="bt-darkmode" id="darkModeButton">Light Mode</button>
            <form class="nav_form" role="search" method="GET" action="pesquisa.php">
                <input class="form-control mr-sm-2" type="search" name="filme" id="searchInput" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn_pesquisar" id="btn_pesquisar" type="submit">Pesquisar</button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="dropdown">
                    <?php
                    $pagina = str_replace(".php", "", basename($_SERVER['SCRIPT_NAME']));
                    ?>
                    <li class="nav-item">
                        <a class="nav-link<?= ($pagina == "index") ? " active" : "" ?>" id="itemnav" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= ($pagina == "reviews") ? " active" : "" ?>" id="itemnav" aria-current="page" href="reviews.php">Reviews</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle<?= ($pagina == "filmesemexibicao" || $pagina == "cinemas" || $pagina == "sobrenos" || 
                        $pagina == "todos" || $pagina == "contactos") ? " active" : "" ?>" id="itemnav" href="#" role="button" 
                        data-bs-toggle="dropdown" aria-expanded="false">CineMania</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item<?= ($pagina == "filmesemexibicao") ? " active" : "" ?>" id="itemnav_dropdown" href="filmesemexibicao.php">Filmes em Exibição</a></li>
                            <li><a class="dropdown-item<?= ($pagina == "todos") ? " active" : "" ?>" id="itemnav_dropdown" href="todos.php">Todos os Filmes</a></li>
                            <li><a class="dropdown-item<?= ($pagina == "cinemas") ? " active" : "" ?>" id="itemnav_dropdown" href="cinemas.php">Cinemas</a></li>
                            <li><a class="dropdown-item<?= ($pagina == "sobrenos") ? " active" : "" ?>" id="itemnav_dropdown" href="sobrenos.php">Sobre nós</a></li>
                            <li><a class="dropdown-item<?= ($pagina == "contactos") ? " active" : "" ?>" id="itemnav_dropdown" href="contactos.php">Contactos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle<?= ($pagina == "acao" || $pagina == "comedia" || $pagina == "ficcao" || $pagina == "drama") ? 
                        " active" : "" ?>" id="itemnav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Por Categorias</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item<?= ($pagina == "acao") ? " active" : "" ?>" id="itemnav_dropdown" href="acao.php">Ação</a></li>
                            <li><a class="dropdown-item<?= ($pagina == "ficcao") ? " active" : "" ?>" id="itemnav_dropdown" href="ficcao.php">Ficção Científica</a></li>
                            <li><a class="dropdown-item<?= ($pagina == "drama") ? " active" : "" ?>" id="itemnav_dropdown" href="drama.php">Drama</a></li>
                            <!-- <li><hr class="dropdown-divider"></li> -->
                            <li><a class="dropdown-item<?= ($pagina == "comedia") ? " active" : "" ?>" id="itemnav_dropdown" href="comedia.php">Comédia</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle<?= ($pagina == "quiz" || $pagina == "rgb") ? " active" : "" ?>" id="itemnav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Extra</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item<?= ($pagina == "quiz") ? " active" : "" ?>" id="itemnav_dropdown" href="quiz.php">Quiz</a></li>
                            <li><a class="dropdown-item<?= ($pagina == "rgb") ? " active" : "" ?>" id="itemnav_dropdown" href="rgb.php">RGB</a></li>
                        </ul>
                    </li>
                    <li>
                        <!-- Form com BD (Basedados) - Aparece no footer. Quando desaparece lá, aparece aqui -->
                        <div class="newsletter_header">
                        <div class="col-12">
                            <div class="mensagemClass"><?php echo $mensagemFeedback; ?></div>
                            <form class="form_signup" method="POST" action="" enctype="multipart/form-data">
                                <input type="email" name="text_email" id="emailInput" required placeholder="Seu email">
                                <input type="submit" name="btn_submit" id="inputRegistar" value="Registar">
                            </form>
                        </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    function RegistarEmail(){
        global $mensagemFeedback;
        //Executar as operações necessárias para o registo de um novo email
        $email = $_POST['text_email'];
        $erro = false;
        if($email == ""){
            $mensagemFeedback = 'Email não preenchido';
            $erro = true;
        }
        if($erro){
            return;
        }

        //Processo do registo do novo utilizador
        include 'config.php';
        $ligacao = new PDO("mysql:dbname=$base_dados;host=$host", $user, $password);

        //Verificar se já existe o mesmo email
        $motor = $ligacao->prepare("SELECT email FROM users WHERE email = ?");
        $motor->bindParam(1, $email, PDO::PARAM_STR);
        $motor->execute();

        if($motor->rowCount() != 0){ // significa que encontrou um email igual
            $mensagemFeedback = 'Email já existente: <strong>'.$email.'</strong>';
            $ligacao = null;
        }
        else{ // registo do novo email
            $motor = $ligacao->prepare("SELECT MAX(id_user) AS MaxID FROM users");
            $motor->execute();
            $id_temp = $motor->fetch(PDO::FETCH_ASSOC)['MaxID']; // buscar IDs
            if($id_temp == null) // caso não haja ainda IDs(ID null), atribui ID 1
                $id_temp = 1;
            else{ // auto incrementa ID
                $id_temp++;
            }

            $sql = "INSERT INTO users VALUES(:id_user, :email)";
            $motor = $ligacao->prepare($sql);
            $motor->bindParam(":id_user", $id_temp, PDO::PARAM_INT);
            $motor->bindParam(":email", $email, PDO::PARAM_STR);
            $motor->execute();
            $ligacao = null;

            // Mensagem sucesso
            $mensagemFeedback =  'Email registado com sucesso: <strong>'.$email.'</strong>';
        }
    }
?>