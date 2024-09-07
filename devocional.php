<?php
    $con = mysqli_connect("localhost", "u267143979_icpsorocaba", "EliasMaluf1402@", "u267143979_db_icpsorocaba");
    $sql = "select * from tb_devotionalverse where 1";
    $resultado = $con->query($sql);
    $row = $resultado->fetch_object();
    $rs = mysqli_query($con, $sql);
    mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- open graph -->

        <!-- og - devotional -->
        <meta property="og:title" content="Devocional | ICP Casa do Pai Sorocaba">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.comunhaoplenasorocaba.com.br/devocional">
        <meta property="og:description" content="Seja edificado com a palavra, através do devocional que preparamos para você">
        <meta property="og:site_name" content="ICP Casa do Pai">
        <meta property="og:image" content="https://i.ibb.co/NtGbLBs/open-graph-daily-devotional.webp">

        <!-- browser visual settings -->
        <link rel="icon" type="image/x-icon" href="assets/images/logotipo/logo_icon_icp-casa-do-pai.ico">
        <title>Devocional | ICP Casa do Pai Sorocaba</title>
        <meta name="description" content="Seja edificado com a palavra, através do devocional que preparamos para você">

        <!-- browser background settings -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- search engines - SEO -->
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="ICP, Igreja Comunhão Plena, ICP Casa do Pai, Vida Plena, ICP Sorocaba, Versículo do Dia, Devocional">
        <meta name="rating" content="general">

        <!-- additional information -->
        <meta name="copyright" content="© 2024 Igreja Comunhão Plena">
        <meta name="author" content="Evandro Lopes">
        <meta name="author" content="Wesley Lopes">

        <!-- import -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=002">
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css?v=002">

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
            <section id="daily-devotional">
                <h3 class="devotional-section-title">Devocional</h3>
                <img src="https://i.ibb.co/2vbp0J7/pessoa-meditando-na-palavra.png" alt="">
                <p>
                    <i class="fa-solid fa-quote-left"></i>
                    <?php print $row->textVerseOfTheDay; ?>
                    <i class="fa-solid fa-quote-right"></i>
                </br>
                    <span> <i class="fa-solid fa-book-bible"></i> <?php print $row->bibleBook; ?> - <?php print $row->bibleVersion; ?></span>
                </p>
                <p><?php print $row->dailyDevotionalText; ?></p>
            </section>
        </main>
        <footer>
            <!-- Includes the footer -->
             <?php
                include 'assets/php/include/footer.php';
            ?>
        </footer>

        <!-- import javascript -->
        <script src="assets/js/script.js?v=002"></script>
    </body>
</html>