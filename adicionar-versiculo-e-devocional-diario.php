<?php
    session_start();

    if(!$_SESSION['username']){
            unset($_SESSION['username']);
            header("Location: login");
    }

    include_once('assets/php/database-connection.php');
    include_once('assets/php/get-the-value-from-the-stash-versioning.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- import -->
        <link rel="stylesheet" type="text/css" href="assets/css/reset-css-and-color-palette.css?v=<?php print $webpage_data->cache_versioning; ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/header.css?v=<?php print $webpage_data->cache_versioning; ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/update-devotional-verse.css?v=<?php print $webpage_data->cache_versioning; ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css?v=<?php print $webpage_data->cache_versioning; ?>">

        <!-- browser visual settings -->
        <title>Adicionar Versículo & Devocional | ICP Casa do Pai Sorocaba</title>
        <meta name="description" content="Formulário para adicionar o Versículo do Dia e Devocional Diário">

        <!-- browser background settings -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- search engines - SEO -->
        <meta name="robots" content="no-index, no-follow">
        <meta name="rating" content="general">

        <!-- additional information -->
        <meta name="copyright" content="© 2024 Igreja Comunhão Plena">
        <meta name="author" content="Wesley Aguiar Lopes - Walps">

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
            <section id="update-devotional-verse">
                <form class="update-form" action="/assets/php/add-verse-and-daily-devotional" method="POST">
                    <h2 class="title">Adicionar</h2>
                    <h3 class="subtitle">Versículo e Devocional</h3>
                    <div class="group">
                        <div class="items-form">
                            <label for="bible-book">Livro - Capítulo - Versículo
                                <span class="asterisk">*</span>
                            </label>
                            <input type="text" name="bible-book" placeholder="Ex: João 10:10-12" required autofocus autocomplete="off">
                        </div>
                        <div class="items-form">
                            <label for="bible-version">Versão do texto do Versículo
                                <span class="asterisk">*</span>
                            </label>
                            <select name="bible-version" required>
                                <option value="">Selecione a Versão Ex: ARA</option>
                                <option value="ARA">ARA - Almeida Revista e Atualizada</option>
                                <option value="ARC">ARC - Almeida Revista e Corrigida</option>
                                <option value="NTLH">NTLH - Nova Tradução na Linguagem de Hoje</option>
                                <option value="NVI">NVI - Nova Versão Internacional</option>
                                <option value="NVT">NVT - Nova Versão Transformadora</option>
                            </select>
                        </div>
                    </div>
                    <div class="container-msg">
                        <label for="text-verse-of-the-day">Versículo do Dia
                            <span class="asterisk">*</span>
                        </label>
                        <textarea name="text-verse-of-the-day" rows="5" placeholder="Ex: O ladrão vem somente para roubar, matar e destruir; eu vim para que tenham vida e a tenham em abundância." required autocomplete="off"></textarea>
                    </div>
                    <div class="container-msg">
                        <label for="daily-devotional-text">Devocional Diário
                            <span class="asterisk">*</span>
                        </label>
                        <textarea name="daily-devotional-text" rows="5" placeholder="Ex: Em outras palavras, o ladrão representa o falso líder religioso, os quais, semelhantemente aos fariseus que expulsaram da sinagoga ao que havia sido curado..." required autocomplete="off"></textarea>
                    </div>
                    <div class="btn-form">
                        <button type="submit" name="btn-add-verse-and-daily-devotional" title="Clique para Adicionar o Versículo do Dia e o Devocional Diário">
                            <i class="fa-solid fa-plus"></i>
                            Adicionar
                        </button>
                        <button type="reset" title="Clique para Limpar os Campos">
                            <i class="fa-solid fa-broom"></i>
                            Limpar Campos
                        </button>
                    </div>
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
        <script src="assets/js/script.js?v=<?php print $webpage_data->cache_versioning; ?>"></script>
    </body>
</html>
<?php
    $con->close();
?>