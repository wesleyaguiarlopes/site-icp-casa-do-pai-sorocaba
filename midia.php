<?php
    include_once('assets/php/database-connection.php');
    include_once('assets/php/get-the-value-from-the-stash-versioning.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- browser visual settings -->
        <link rel="icon" type="image/x-icon" href="assets/images/logotipo/logo_icon_icp-casa-do-pai.ico">
        <title>Mídia | ICP Casa do Pai Sorocaba</title>
        <meta name="description" content="Igreja Comunhão Plena Wannel Ville, na cidade de Sorocaba, propagando o evangelho a toda criatura, para que vivam uma vida plena com Deus nas 7 áreas">
        
        <!-- import -->
        <link rel="stylesheet" type="text/css" href="assets/css/reset-css-and-color-palette.css?v=<?php print $webpage_data->cache_versioning; ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/header.css?v=<?php print $webpage_data->cache_versioning; ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/midia.css?v=<?php print $webpage_data->cache_versioning; ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css?v=<?php print $webpage_data->cache_versioning; ?>">

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
            <h2 class="title-question">O que deseja baixar?</h2>
            <div class="container-btn">
                <a  class="btn-anchor" href="/assets/midia/video-looping-avisos-icp-sorocaba.mp4" download="video-looping-avisos-icp-sorocaba.mp4">Vídeo Pré e Pós Culto</a>
                <a  class="btn-anchor" href="/assets/midia/avisos-icp-sorocaba-v1.pptx" download="avisos-icp-sorocaba-v1.pptx">Slide de Avisos</a>
            </div>
        </main>
        <footer id="footer">
            <!-- Includes the footer -->
             <?php
                include 'assets/php/include/footer.php';
            ?>
        </footer>

        <!-- import javascript -->
        <script src="assets/js/script.js?v=<?php print $webpage_data->cache_versioning; ?>"></script>
    </body>
</html>