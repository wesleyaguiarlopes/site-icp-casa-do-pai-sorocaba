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
        <!-- import -->
        <link rel="stylesheet" type="text/css" href="assets/css/reset-css-and-color-palette.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/header.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/update-videos.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css?v=005">

        <!-- browser visual settings -->
        <link rel="icon" type="image/x-icon" href="assets/images/logotipo/logo_icon_icp-casa-do-pai.ico">
        <title>Atualizar Vídeos | ICP Casa do Pai Sorocaba</title>

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        <header id="navigation-menu">
            <!-- Includes the header -->
             <?php
                include 'assets/php/include/header.php';
            ?>
        </header>
        <main id="content">
                <section id="update-videos">
                    <form class="update-form" action="/assets/php/update-videos.php" method="POST">
                        <h2 class="title">Atualizar</h2>
                        <h3 class="subtitle">link dos vídeos dos Cultos</h3>
                        <fieldset>
                            <legend><span>Live</span> de Domingo</legend>
                            <textarea name="sunday" rows="5" placeholder="Insira o link de incorporação do vídeo" required></textarea>
                            <button type="submit" name="btnSunday">Atualizar URL</button>
                        </fieldset>
                    </form>
                    <form class="update-form" action="/assets/php/update-videos.php" method="POST">
                        <fieldset>
                            <legend><span>Live</span> de Quarta-Feira</legend>
                            <textarea name="wednesday" rows="5" placeholder="Insira o link de incorporação do vídeo" required></textarea>
                            <button type="submit" name="btnWednesday">Atualizar URL</button>
                        </fieldset>
                    </form>
                    <form class="update-form" action="/assets/php/update-videos.php" method="POST">
                        <fieldset>
                            <legend><span>Live</span> de Sexta-Feira</legend>
                            <textarea name="friday" rows="5" placeholder="Insira o link de incorporação do vídeo" required></textarea>
                            <button type="submit" name="btnFriday">Atualizar URL</button>
                        </fieldset>
                    </form>
                </section>
            </main>
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