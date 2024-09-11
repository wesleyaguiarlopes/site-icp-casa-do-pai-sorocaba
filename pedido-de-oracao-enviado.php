<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- import -->
        <link rel="stylesheet" type="text/css" href="assets/css/reset-css-and-color-palette.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/header.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css?v=005">

        <!-- browser visual settings -->
        <link rel="icon" type="image/x-icon" href="assets/images/logotipo/logo_icon_icp-casa-do-pai.ico">
        <title>Pedido de Oração Enviado | ICP Casa do Pai Sorocaba</title>
        <meta name="description" content="Nossos intercessores estarão orando por você">

        <!-- browser background settings -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- search engines - SEO -->
        <meta name="robots" content="no-index, no-follow">
        <meta name="keywords" content="ICP, Igreja Comunhão Plena, ICP Casa do Pai, Vida Plena, ICP Sorocaba">
        <meta name="rating" content="general">

        <!-- additional information -->
        <meta name="copyright" content="© 2024 ICP Casa do Pai Sorocaba">
        <meta name="author" content="Evandro Lopes">
        <meta name="author" content="Wesley Lopes">

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
        <section id="pedido-de-oracao-enviado">
            <div class="card-thanks">
                <h2 class="title">Pedido de</h2>
                <h3 class="subtitle">Oração</h3>
                <div class="thanks">
                    <p>Obrigado por enviar o seu <span>Pedido de Oração!</span></p>
                    <i class="fa-regular fa-face-smile-beam fa-bounce"></i>
                    <p>Nossos Intercessores estarão orando pela causa!</p>
                </div>
                <div class="btn-thanks">
                    <a id="btn-home" href="/" title="Voltar ao site ICP Casa do Pai Sorocaba">
                        <i class="fa-solid fa-rotate-left"></i>
                    </a>
                    <a href="/#pedido-de-oracao" title="Fazer um novo pedido de Oração">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Novo Pedido
                    </a>
                </div>
                <input type="hidden" name="_cc" value="lopes.a.wesley@gmail.com">
                <!-- Para definir mais endereços de e-mail, adiciono a vírgula -->
                <input type="hidden" name="_subject" value="Novo Pedido de Oração através do Site">
                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="/pedido-de-oracao-enviado">
            </div>
        </section>
        <footer>
            <!-- Includes the footer -->
             <?php
                include 'assets/php/include/footer.php';
            ?>
        </footer>

        <!-- import javascript -->
        <script src="/assets/js/script.js?v=005"></script>
    </body>
</html>