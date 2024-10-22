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
        <!-- open graph -->

        <!-- open graph - update verse of the day and daily devotional -->
        <meta property="og:title" content="Atualizar Versículo e Devocional">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.comunhaoplenasorocaba.com.br/atualizar-devocional">
        <meta property="og:description" content="Formulário para atulizar o Versículo do Dia e Devocional Diário">
        <meta property="og:site_name" content="ICP Casa do Pai Sorocaba">
        <meta property="og:image" content="https://i.ibb.co/BPK6rCm/open-graph-update-devotional-verse.webp">

        <!-- import -->
        <link rel="stylesheet" type="text/css" href="assets/css/reset-css-and-color-palette.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/header.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/update-devotional-verse.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css?v=005">

        <!-- browser visual settings -->
        <link rel="icon" type="image/x-icon" href="assets/images/logotipo/logo_icon_icp-casa-do-pai.ico">
        <title>Atualizar Versículo & Devocional | ICP Casa do Pai Sorocaba</title>
        <meta name="description" content="Formulário para atualização diária do Versículo do Dia e Devocional Diário">

        <!-- browser background settings -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- search engines - SEO -->
        <meta name="robots" content="no-index, no-follow">
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
            <section id="update-devotional-verse">
                <form class="update-form" action="/assets/php/update-devotional-verse" method="POST">
                    <h2 class="title">Atualizar</h2>
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
                    <div class="group">
                        <div class="items-form author">
                            <label for="author-name">Autor do Devocional
                                <span class="asterisk">*</span>
                            </label>
                            <input type="text" name="author-name" placeholder="Informe como quer ser reconhecido" required autocomplete="off">
                        </div>
                    </div>
                    <div class="btn-form">
                        <button type="submit" name="btn-update-devotional-verse" title="Clique para Atualizar o Versículo do Dia e o Devocional Diário">
                            <i class="fa-solid fa-rotate-right"></i>
                            Atualizar
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
        <script src="assets/js/script.js?v=005"></script>
    </body>
</html>