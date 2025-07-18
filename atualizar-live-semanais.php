<?php
    session_start();

    if(!$_SESSION['username'] == true){
        unset($_SESSION['username']);
        header("Location: login");
    }

    include_once('assets/php/database-connection.php');
    include_once('assets/php/get-the-value-from-the-stash-versioning.php');
    include_once('assets/php/get-the-url-of-the-videos-of-the-week.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- import -->
        <link rel="stylesheet" type="text/css" href="assets/css/reset-css-and-color-palette.css?v=<?php print $webpage_data->cache_versioning; ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/header.css?v=<?php print $webpage_data->cache_versioning; ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/update-weekly-live-videos.css?v=<?php print $webpage_data->cache_versioning; ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css?v=<?php print $webpage_data->cache_versioning; ?>">

        <!-- browser visual settings -->
        <link rel="icon" type="image/x-icon" href="assets/images/logotipo/logo_icon_icp-casa-do-pai.ico">
        <title>Atualizar Live Semanais | ICP Casa do Pai Sorocaba</title>

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
                <form class="update-form" action="/assets/php/update-weekly-live-videos" method="POST">
                    <h2 class="title">Atualizar link das Live semanais</h2>
                    <div class="update-content">
                        <div class="container-video">
                            <fieldset class="link-area">
                                <legend>01 - link de incorporação do youtube</legend>
                                <textarea name="new-url" id="new-url" rows="4" placeholder="Cole o link completo de incorporação do YouTube aqui..." required oninput="linkInserted()" autofocus></textarea>
                            </fieldset>
                            <fieldset class="video-preview">
                                <legend>02 - pré visualização do vídeo</legend>
                                <div class="video-wrapper">
                                    <iframe
                                        src=""
                                        title="YouTube video player"
                                        allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            </fieldset>
                        </div>
                        <fieldset class="entrance-area">
                            <legend>03 - Selecione o dia da semana</legend>
                            <select name="day-of-the-week" class="day-of-the-week" required>
                                <option value="">●● Dia da Semana ●●</option>
                                <option value="1">Domingo</option>
                                <option value="2">Quarta-Feira</option>
                                <option value="3">Sexta-Feira</option>
                            </select>
                            <input class="worship-date" type="date" name="worship-date" required>
                            <button class="btn-update-live-link" type="submit" name="btn-update-live-link">
                                <i class="fa-solid fa-arrows-rotate"></i>
                                Atualizar URL
                            </button>
                        </fieldset>
                    </div>
                </form>
                <div class="current-videos-of-the-week">
                    <fieldset class="container-video">
                        <legend><span class="live-logo">Live</span><?php echo ' de ' . $video_of_the_day_of_the_week[0]. ' ● ' . $video_url_of_this_week_update_date[0] ?></legend>
                        <iframe
                            src="<?php echo $url_of_videos_of_the_week[0] ?>"
                            allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowullscreen>
                        </iframe>
                    </fieldset>
                    <fieldset class="container-video">
                        <legend><span class="live-logo">Live</span><?php echo ' de ' . $video_of_the_day_of_the_week[1]. ' ● ' . $video_url_of_this_week_update_date[1] ?></legend>
                        <iframe
                            src="<?php echo $url_of_videos_of_the_week[1] ?>"
                            allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowullscreen>
                        </iframe>
                    </fieldset>
                    <fieldset class="container-video">
                        <legend><span class="live-logo">Live</span><?php echo ' de ' . $video_of_the_day_of_the_week[2]. ' ● ' . $video_url_of_this_week_update_date[2] ?></legend>
                        <iframe
                            src="<?php echo $url_of_videos_of_the_week[2] ?>"
                            allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowullscreen>
                        </iframe>
                    </fieldset>
                </div>
            </section>
        </main>
        <footer>
            <!-- Includes the footer -->
             <?php
                include 'assets/php/include/footer.php';
            ?>
        </footer>

        <!-- import javascript -->
        <script src="/assets/js/script.js?v=<?php print $webpage_data->cache_versioning; ?>"></script>
        <script src="assets/js/get-value-from-src-attribute.js?v=<?php print $webpage_data->cache_versioning; ?>"></script>
    </body>
</html>
<?php
    $con->close();
?>