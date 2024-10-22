<?php
    session_start();

    if(!$_SESSION['username'] == true){
            unset($_SESSION['username']);
            header("Location: login");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- browser visual settings -->
        <link rel="icon" type="image/x-icon" href="assets/images/logotipo/logo_icon_icp-casa-do-pai.ico">
        <title>Admin | ICP Casa do Pai Sorocaba</title>
        <meta name="description" content="Igreja Comunhão Plena Wannel Ville, na cidade de Sorocaba, propagando o evangelho a toda criatura, para que vivam uma vida plena com Deus nas 7 áreas">
        
        <!-- import -->
        <link rel="stylesheet" type="text/css" href="assets/css/reset-css-and-color-palette.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/header.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/admin.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css?v=005">

        <!-- import CDN icons -->
        <script src="https://kit.fontawesome.com/d5ee391d5f.js" crossorigin="anonymous"></script>

        <!-- import CDN jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        <header id="navigation-menu">
            <!-- Includes the header -->
             <?php
                include 'assets/php/include/header.php';
            ?>
        </header>
        <main id="content">
            <h2 class="title-question">O que deseja fazer?</h2>
            <div class="container-btn">
                <a  class="btn-anchor" href="atualizar-devocional">Atualizar Devocional</a>
                <a  class="btn-anchor" href="pedidos-de-oracao">Ver Pedidos de Oração</a>
                <a  class="btn-anchor" href="/atualizar-videos">Atualizar Link dos Vídeos</a>
            </div>
        </main>
        <footer id="footer">
            <!-- Includes the footer -->
             <?php
                include 'assets/php/include/footer.php';
            ?>
        </footer>

        <!-- import javascript -->
        <script src="assets/js/script.js?v=005"></script>
    </body>
</html>