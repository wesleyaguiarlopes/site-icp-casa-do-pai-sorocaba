<?php
    session_start();

    include_once('assets/php/database-connection.php');
    include_once('assets/php/get-the-value-from-the-stash-versioning.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- import -->
        <link rel="stylesheet" type="text/css" href="assets/css/reset-css-and-color-palette.css?v=<?php print $webpage_data->cache_versioning; ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/header.css?v=<?php print $webpage_data->cache_versioning; ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/login.css?v=<?php print $webpage_data->cache_versioning; ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css?v=<?php print $webpage_data->cache_versioning; ?>">

        <!-- browser visual settings -->
        <link rel="icon" type="image/x-icon" href="assets/images/logotipo/logo_icon_icp-casa-do-pai.ico">
        <title>Login | ICP Casa do Pai Sorocaba</title>
        <meta name="description" content="Igreja Comunhão Plena Wannel Ville, na cidade de Sorocaba, propagando o evangelho a toda criatura, para que vivam uma vida plena com Deus nas 7 áreas">

        <!-- browser background settings -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- search engines - SEO -->
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="ICP, Igreja Comunhão Plena, ICP Casa do Pai, Vida Plena, ICP Sorocaba">
        <meta name="rating" content="general">

        <!-- additional information -->
        <meta name="copyright" content="© 2024 Igreja Comunhão Plena">
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
        <main id="content">
            <form class="form-login" action="assets/php/authentication" method="post">
                <h1>Login</h1>
                <input type="text" name="username" placeholder="Nome de usuário" required autofocus>
                <input type="password" name="password" placeholder="Senha" required>
                <input type="submit" name="submit" value="Acessar">
            </form>
        </main>
        <footer>
            <!-- Includes the footer -->
             <?php
                include 'assets/php/include/footer.php';
            ?>
        </footer>

        <!-- import javascript -->
        <script src="assets/js/script.js?v=<?php print $webpage_data->cache_versioning; ?>"></script>
    </body>
</html>
<?php
    $con->close();
?>