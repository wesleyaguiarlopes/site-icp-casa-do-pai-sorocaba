<?php
    include_once('assets/php/database-connection.php');

    $sql = "select * from tb_devotionalverse where 1";
    $resultado = $con->query($sql);
    $row = $resultado->fetch_object();
    $rs = mysqli_query($con, $sql);

    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- open graph -->

        <!-- og - home page -->
        <meta property="og:title" content="ICP Casa do Pai Wanel Ville Sorocaba">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.comunhaoplenasorocaba.com.br">
        <meta property="og:description" content="Aqui é a casa do Pai!">
        <meta property="og:site_name" content="ICP Casa do Pai Sorocaba">
        <meta property="og:image" content="https://i.ibb.co/4dSq0c1/open-graph-icp-sorocaba.webp">

        <!-- import -->
        <link rel="stylesheet" type="text/css" href="assets/css/reset-css-and-color-palette.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/header.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/home.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/index/verse-day.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/index/latest-live-services.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/index/seven-areas-of-full-life.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/index/photo-gallery.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/index/prayer-request.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/index/contribute.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/index/local.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/index/team.css?v=005">
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css?v=005">

        <!-- browser visual settings -->
        <link rel="icon" type="image/x-icon" href="assets/images/logotipo/logo_icon_icp-casa-do-pai.ico">
        <title>ICP Casa do Pai Sorocaba</title>
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
            <section id="home" class="overlay">
                <div class="church-name-and-apostolic-year">
                    <h1 class="church-name"><span>ICP</span> Casa do Pai <span>Sorocaba</span></h1>
                    <h2 class="apostolic-year"><span>ano apostólico de</span> Pentecostes</h2>
                </div>
                <p class="text-apostolic-year">... todos ficaram cheios do Espírito Santo e começaram a falar em outras línguas ... Atos 2:4 NVT</p>
                <button class="btn-text-apostolic-year">
                    <i class="fa-solid fa-book-bible"></i>
                    Ler <span>Atos 2 : 1 ao 4</span>
                </button>
                <dialog id="dg-text-apostolic-year">
                    <button class="btn-closed-text-apostolic-year"><i class="fa-solid fa-xmark"></i></button>
                    <h2 class="book-chapter-verse-version">Atos 2:1-4 NVT</h2>
                    <p class="verse"><span class="verse-number">1 - </span>No dia de Pentecostes, todos estavam reunidos num só lugar.</p>
                    <p class="verse"><span class="verse-number">2 - </span>De repente, veio do céu um som como o de um poderoso vendaval e encheu a casa onde estavam sentados.</p>
                    <p class="verse"><span class="verse-number">3 - </span>Então surgiu algo semelhante a chamas ou línguas de fogo que pousaram sobre cada um deles.</p>
                    <p class="verse"><span class="verse-number">4 - </span>Todos ficaram cheios do Espírito Santo e começaram a falar em outras línguas, conforme o Espírito os habilitava.</p>
                </dialog>
            </section>
            <section id="verse-day">
                <div class="container">
                    <h3 class="title">Versículo do dia</h3>
                    <p class="text"><i class="fa-solid fa-quote-left"></i> <?php print $row->textVerseOfTheDay; ?> <i class="fa-solid fa-quote-right"></i></p>
                    <p class="book-chapter-verse"><?php print $row->bibleBook; ?><span class="version">  <?php print $row->bibleVersion; ?></span></p>
                    <a class="btn-devotional" href="devocional">ler o devocional<i class="fa-solid fa-arrow-right fa-fade"></i></a>
                </div>
            </section>
            <section id="cultos">
                <?php include_once('assets/php/index/get-the-data-from-lives.php'); ?>
            </section>
            <section id="nossas-fotos">
                <div id="gallery-primary">
                    <figcaption class="photo-caption">29.06.2024 - Encontro de Casais ❤️</figcaption>

                    <input type="radio" id="trigger1" name="slider">
                    <label for="trigger1"></label>
                    <div class="slide bg1"></div>

                    <input type="radio" id="trigger2" name="slider" checked>
                    <label for="trigger2"></label>
                    <div class="slide bg2"></div>

                    <input type="radio" id="trigger3" name="slider">
                    <label for="trigger3"></label>
                    <div class="slide bg3"></div>

                    <input type="radio" id="trigger4" name="slider">
                    <label for="trigger4"></label>
                    <div class="slide bg4"></div>

                    <input type="radio" id="trigger5" name="slider">
                    <label for="trigger5"></label>
                    <div class="slide bg5"></div>

                    <input type="radio" id="trigger6" name="slider">
                    <label for="trigger6"></label>
                    <div class="slide bg6"></div>

                    <input type="radio" id="trigger7" name="slider">
                    <label for="trigger7"></label>
                    <div class="slide bg7"></div>

                    <input type="radio" id="trigger8" name="slider">
                    <label for="trigger8"></label>
                    <div class="slide bg8"></div>

                    <input type="radio" id="trigger9" name="slider">
                    <label for="trigger9"></label>
                    <div class="slide bg9"></div>

                    <input type="radio" id="trigger10" name="slider">
                    <label for="trigger10"></label>
                    <div class="slide bg10"></div>

                    <input type="radio" id="trigger11" name="slider">
                    <label for="trigger11"></label>
                    <div class="slide bg11"></div>

                    <input type="radio" id="trigger12" name="slider">
                    <label for="trigger12"></label>
                    <div class="slide bg12"></div>

                    <input type="radio" id="trigger13" name="slider">
                    <label for="trigger13"></label>
                    <div class="slide bg13"></div>

                    <input type="radio" id="trigger14" name="slider">
                    <label for="trigger14"></label>
                    <div class="slide bg14"></div>

                    <input type="radio" id="trigger15" name="slider">
                    <label for="trigger15"></label>
                    <div class="slide bg15"></div>

                    <input type="radio" id="trigger16" name="slider">
                    <label for="trigger16"></label>
                    <div class="slide bg16"></div>

                    <input type="radio" id="trigger17" name="slider">
                    <label for="trigger17"></label>
                    <div class="slide bg17"></div>

                    <input type="radio" id="trigger18" name="slider">
                    <label for="trigger18"></label>
                    <div class="slide bg18"></div>

                    <input type="radio" id="trigger19" name="slider">
                    <label for="trigger19"></label>
                    <div class="slide bg19"></div>

                    <input type="radio" id="trigger20" name="slider">
                    <label for="trigger20"></label>
                    <div class="slide bg20"></div>

                    <input type="radio" id="trigger21" name="slider">
                    <label for="trigger21"></label>
                    <div class="slide bg21"></div>

                    <input type="radio" id="trigger22" name="slider">
                    <label for="trigger22"></label>
                    <div class="slide bg22"></div>

                    <input type="radio" id="trigger23" name="slider">
                    <label for="trigger23"></label>
                    <div class="slide bg23"></div>

                    <input type="radio" id="trigger24" name="slider">
                    <label for="trigger24"></label>
                    <div class="slide bg24"></div>

                    <input type="radio" id="trigger25" name="slider">
                    <label for="trigger25"></label>
                    <div class="slide bg25"></div>

                    <input type="radio" id="trigger26" name="slider">
                    <label for="trigger26"></label>
                    <div class="slide bg26"></div>

                    <input type="radio" id="trigger27" name="slider">
                    <label for="trigger27"></label>
                    <div class="slide bg27"></div>
                </div>
            </section>
            <section id="galeria-de-fotos">
                <div class="content">
                    <div class="wrapper fourth-album">
                        <div class="view">
                            <div class="gallery">
                                <input type="radio" name="opc000" id="opc1000"checked>
                                <input type="radio" name="opc000" id="opc2000">
                                <input type="radio" name="opc000" id="opc3000">
                                <input type="radio" name="opc000" id="opc4000">
                                <input type="radio" name="opc000" id="opc5000">
                                <div class="card move">
                                    <img src="assets/images/photo-gallery/fourth-album/photo1.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/fourth-album/photo2.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/fourth-album/photo3.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/fourth-album/photo4.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/fourth-album/photo5.jpeg">
                                </div>
                                <p class="description">17.05.2024 - Ministração com Pr. Joseph Langa</p>
                            </div>
                        </div>
                        <nav id="navigation">
                            <label class="mini-preview" for="opc1000">
                                <img src="assets/images/photo-gallery/fourth-album/photo1.jpeg">
                            </label>
                            <label class="mini-preview" for="opc2000">
                                <img src="assets/images/photo-gallery/fourth-album/photo2.jpeg">
                            </label>
                            <label class="mini-preview" for="opc3000">
                                <img src="assets/images/photo-gallery/fourth-album/photo3.jpeg">
                            </label>
                            <label class="mini-preview" for="opc4000">
                                <img src="assets/images/photo-gallery/fourth-album/photo4.jpeg">
                            </label>
                            <label class="mini-preview" for="opc5000">
                                <img src="assets/images/photo-gallery/fourth-album/photo5.jpeg">
                            </label>
                        </nav>
                    </div>
                    <div class="wrapper third-album">
                        <div class="view">
                            <div class="gallery">
                                <input type="radio" name="opc00" id="opc301"checked>
                                <input type="radio" name="opc00" id="opc302">
                                <input type="radio" name="opc00" id="opc303">
                                <input type="radio" name="opc00" id="opc304">
                                <input type="radio" name="opc00" id="opc305">
                                <input type="radio" name="opc00" id="opc306">
                                <input type="radio" name="opc00" id="opc307">
                                <input type="radio" name="opc00" id="opc308">
                                <input type="radio" name="opc00" id="opc309">
                                <input type="radio" name="opc00" id="opc310">
                                <input type="radio" name="opc00" id="opc311">
                                <div class="card move">
                                    <img src="assets/images/photo-gallery/third-album/photo1.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/third-album/photo2.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/third-album/photo3.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/third-album/photo4.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/third-album/photo5.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/third-album/photo6.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/third-album/photo7.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/third-album/photo8.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/third-album/photo9.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/third-album/photo10.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/third-album/photo11.jpeg">
                                </div>
                                <p class="description">12.05.2024 - Dia das mães</p>
                            </div>
                        </div>
                        <nav id="navigation">
                            <label class="mini-preview" for="opc301">
                                <img src="assets/images/photo-gallery/third-album/photo1.jpeg">
                            </label>
                            <label class="mini-preview" for="opc302">
                                <img src="assets/images/photo-gallery/third-album/photo2.jpeg">
                            </label>
                            <label class="mini-preview" for="opc303">
                                <img src="assets/images/photo-gallery/third-album/photo3.jpeg">
                            </label>
                            <label class="mini-preview" for="opc304">
                                <img src="assets/images/photo-gallery/third-album/photo4.jpeg">
                            </label>
                            <label class="mini-preview" for="opc305">
                                <img src="assets/images/photo-gallery/third-album/photo5.jpeg">
                            </label>
                            <label class="mini-preview" for="opc306">
                                <img src="assets/images/photo-gallery/third-album/photo6.jpeg">
                            </label>
                            <label class="mini-preview" for="opc307">
                                <img src="assets/images/photo-gallery/third-album/photo7.jpeg">
                            </label>
                            <label class="mini-preview" for="opc308">
                                <img src="assets/images/photo-gallery/third-album/photo8.jpeg">
                            </label>
                            <label class="mini-preview" for="opc309">
                                <img src="assets/images/photo-gallery/third-album/photo9.jpeg">
                            </label>
                            <label class="mini-preview" for="opc310">
                                <img src="assets/images/photo-gallery/third-album/photo10.jpeg">
                            </label>
                            <label class="mini-preview" for="opc311">
                                <img src="assets/images/photo-gallery/third-album/photo11.jpeg">
                            </label>
                        </nav>
                    </div>
                    <div class="wrapper second-album">
                        <div class="view">
                            <div class="gallery ">
                                <input type="radio" name="opc0" id="opc201"checked>
                                <input type="radio" name="opc0" id="opc202">
                                <input type="radio" name="opc0" id="opc203">
                                <input type="radio" name="opc0" id="opc204">
                                <input type="radio" name="opc0" id="opc205">
                                <input type="radio" name="opc0" id="opc206">
                                <input type="radio" name="opc0" id="opc207">
                                <input type="radio" name="opc0" id="opc208">
                                <div class="card move">
                                    <img src="assets/images/photo-gallery/second-album/photo1.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/second-album/photo2.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/second-album/photo3.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/second-album/photo4.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/second-album/photo5.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/second-album/photo6.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/second-album/photo7.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/second-album/photo8.jpeg">
                                </div>
                                <p class="description">Apresentação das crianças</p>
                            </div>
                        </div>
                        <nav id="navigation">
                            <label class="mini-preview" for="opc201">
                                <img src="assets/images/photo-gallery/second-album/photo1.jpeg">
                            </label>
                            <label class="mini-preview" for="opc202">
                                <img src="assets/images/photo-gallery/second-album/photo2.jpeg">
                            </label>
                            <label class="mini-preview" for="opc203">
                                <img src="assets/images/photo-gallery/second-album/photo3.jpeg">
                            </label>
                            <label class="mini-preview" for="opc204">
                                <img src="assets/images/photo-gallery/second-album/photo4.jpeg">
                            </label>
                            <label class="mini-preview" for="opc205">
                                <img src="assets/images/photo-gallery/second-album/photo5.jpeg">
                            </label>
                            <label class="mini-preview" for="opc206">
                                <img src="assets/images/photo-gallery/second-album/photo6.jpeg">
                            </label>
                            <label class="mini-preview" for="opc207">
                                <img src="assets/images/photo-gallery/second-album/photo7.jpeg">
                            </label>
                            <label class="mini-preview" for="opc208">
                                <img src="assets/images/photo-gallery/second-album/photo8.jpeg">
                            </label>
                        </nav>
                    </div>
                    <div class="wrapper first-album">
                        <div class="view">
                            <div class="gallery">
                                <input type="radio" name="opc" id="opc101"checked>
                                <input type="radio" name="opc" id="opc102">
                                <input type="radio" name="opc" id="opc103">
                                <input type="radio" name="opc" id="opc104">
                                <input type="radio" name="opc" id="opc105">
                                <input type="radio" name="opc" id="opc106">
                                <div class="card move">
                                    <img src="assets/images/photo-gallery/first-album/photo1.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/first-album/photo2.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/first-album/photo3.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/first-album/photo4.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/first-album/photo5.jpeg">
                                </div>
                                <div class="card">
                                    <img src="assets/images/photo-gallery/first-album/photo6.jpeg">
                                </div>
                                <p class="description">05.05.2024 - Santa Ceia do Senhor</p>
                            </div>
                        </div>
                        <nav id="navigation">
                            <label class="mini-preview" for="opc101">
                                <img src="assets/images/photo-gallery/first-album/photo1.jpeg">
                            </label>
                            <label class="mini-preview" for="opc102">
                                <img src="assets/images/photo-gallery/first-album/photo2.jpeg">
                            </label>
                            <label class="mini-preview" for="opc103">
                                <img src="assets/images/photo-gallery/first-album/photo3.jpeg">
                            </label>
                            <label class="mini-preview" for="opc104">
                                <img src="assets/images/photo-gallery/first-album/photo4.jpeg">
                            </label>
                            <label class="mini-preview" for="opc105">
                                <img src="assets/images/photo-gallery/first-album/photo5.jpeg">
                            </label>
                            <label class="mini-preview" for="opc106">
                                <img src="assets/images/photo-gallery/first-album/photo6.jpeg">
                            </label>
                        </nav>
                    </div>
                </div>
            </section>
            <section id="seven-areas-of-full-life">
                <div class="title">
                    <h2>7</h2>
                    <h3>áreas de <span>vida plena</span></h3>
                </div>
                <p class="info"></p>
                <div class="areas">
                    <button id="btn1">Espiritual</button>
                    <dialog id="dg1">
                        <button class="btnClose1"><i class="fa-solid fa-xmark"></i></button>
                        <h2>Espiritual</h2>
                        <span>Ser cheio do Espírito Santo</span>
                        <p>O homem deve desfrutar desta vida espiritual em Cristo Jesus através do Espírito Santo, tendo uma intimidade real e profunda com Deus, sendo sobrenatural e cheio do Espírito Santo.</p>
                    </dialog>
                    <button id="btn2">Emocional</button>
                    <dialog id="dg2">
                        <button class="btnClose2"><i class="fa-solid fa-xmark"></i></button>
                        <h2>Emocional</h2>
                        <span>Alegria da Salvação</span>
                        <p>Deus nos chamou para termos uma vida emocional curada e equilibrada, nossos sentimentos influenciados pelo Espírito Santo, com alegria, felicidade e autoestima em Cristo Jesus.</p>
                    </dialog>
                    <button id="btn3">Física</button>
                    <dialog id="dg3">
                        <button class="btnClose3"><i class="fa-solid fa-xmark"></i></button>
                        <h2>Física</h2>
                        <span>Saúde abundância de dias ou longevidade</span>
                        <p>Deus nos chamou para termos saúde, vigor físico, longevidade, a Bíblia diz em <b>Isaías 53:4-5</b> <em>“…Ele tomou sobre si as nossas enfermidades e as nossas dores levou sobre si…, o castigo que nos traz a paz estava sobre Ele, e pelas Suas pisaduras, fomos sarados.</em></p>
                    </dialog>
                    <button id="btn4">Conjugal</button>
                    <dialog id="dg4">
                        <button class="btnClose4"><i class="fa-solid fa-xmark"></i></button>
                        <h2>Conjugal</h2>
                        <span>Lar / Casamento abençoado</span>
                        <p>Deus nos chamou para edificar e estabelecer lares abençoados, que venham ser verdadeiros exemplos para a sociedade, solidificados na palavra de Deus, casamentos sólidos e igrejas fortes.</p>
                    </dialog>
                    <button id="btn5">Familiar</button>
                    <dialog id="dg5">
                        <button class="btnClose5"><i class="fa-solid fa-xmark"></i></button>
                        <h2>Familiar</h2>
                        <span>Benção Familiar</span>
                        <p>Há uma promessa de Deus segundo a revelação de sua palavra no livro de <b>Atos 16:31</b> <em>“…Crê no Senhor Jesus Cristo e serás salvo tu e a tua casa”</em>. O Senhor nos dá o direito de reivindicarmos a salvação da nossa família. Pais, conjugues, filhos e familiares salvos servindo a Deus.</p>
                    </dialog>
                    <button id="btn6">Econômica / Financeira</button>
                    <dialog id="dg6">
                        <button class="btnClose6"><i class="fa-solid fa-xmark"></i></button>
                        <h2>Econômica e Financeira</h2>
                        <span>Benção da prosperidade econômica e a benção da estabilidade financeira</span>
                        <p>Deus nos chamou para sermos prósperos economicamente aqui na terra. Sermos fiéis acerca dos dízimos e das ofertas e cremos que o segredo desta benção está na obediência na Palavra. Prosperidade Econômica (Abundância) e Benção da Estabilidade Financeira (Compromissos em dia e pagos).</p>
                    </dialog>
                    <button id="btn7">Ministerial</button>
                    <dialog id="dg7">
                        <button class="btnClose7"><i class="fa-solid fa-xmark"></i></button>
                        <h2>Ministerial</h2>
                        <span>Capacitação de Deus para compartilhar o que temos recebido de Deus através do Espírito Santo para ministrarmos boas novas e a alegria do Reino do Senhor Jesus.</span>
                        <p>Deus nos escolheu para um propósito, uma chamada, a qual realizaremos como embaixadores de Cristo na terra, e em nome de Jesus, desfrutaremos 100% desta chamada ministerial.</p>
                    </dialog>
                </div>
            </section>
            <section id="pedido-de-oracao">
                <form action="assets/php/register-prayer-request.php" method="POST" autocomplete="on">
                    <h2 class="title">Pedido de</h2>
                    <h3 class="subtitle">Oração</h3>
                    <div class="info-bible">
                        <p>A palavra de Deus diz em <span>Efésios 6:18 NTLH "...orem sempre por todo o povo de Deus."</span></p>
                        <p>Faça o seu pedido de oração, preenchendo o formulário abaixo que nossa equipe de intercessores vai orar pela sua causa.</p>
                    </div>
                    <div class="group">
                        <div class="items-form">
                            <label for="name">Nome (Ex: José Oliveira)
                                <span class="asterisk">*</span>
                            </label>
                            <input type="text" name="name" placeholder="Informe o seu nome" autocomplete="name" maxlength="100" required>
                        </div>
                        <div class="items-form">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" placeholder="Informe o seu endereço de e-mail" maxlength="100" autocomplete="email">
                        </div>
                    </div>
                    <div class="group">
                        <div>
                            <label for="neighborhood">Bairro</label>
                            <input type="text" name="neighborhood" placeholder="Informe o seu bairro" maxlength="40" autocomplete="address-level3">
                        </div>
                        <div>
                            <label for="city">Cidade</label>
                            <input type="text" name="city" placeholder="Informe a sua cidade" maxlength="40" autocomplete="address-level2">
                        </div>
                    </div>
                    <div class="container-msg">
                        <label for="requestPrayer">Pedido de Oração
                            <span class="asterisk">*</span>
                        </label>
                        <textarea name="requestPrayer" id="message" rows="5" placeholder="Digite aqui o seu pedido de oração..." required></textarea>
                    </div>
                    <div class="btn-form">
                        <button type="submit" name="btn-send-prayer-request" title="Clique para Enviar o seu Pedido de Oração">
                            <i class="fa-regular fa-paper-plane"></i>
                            Enviar Pedido
                        </button>
                        <button type="reset" title="Clique para Limpar os Campos">
                            <i class="fa-solid fa-broom"></i>
                            Limpar Campos
                        </button>
                    </div>
                </form>
                <dialog id="dg-prayer-request-sent">
                    <div class="content">
                        <i class="fa-regular fa-circle-check fa-fade"></i>
                        <h1>Enviado!</h1>
                        <p>Recebemos o seu pedido de oração e estaremos orando por sua causa!</p>
                        <button id="btn-close-prayer-request-sent">Ok</button>
                    </div>
                </dialog>
                <dialog id="dg-prayer-request-not-sent">
                    <div class="content">
                        <i class="fa-regular fa-circle-xmark fa-fade"></i>
                        <h1>Falha ao Enviar!</h1>
                        <p>Desculpe :( ! não conseguimos receber o seu pedido de oração, por favor, nos envie novamente</p>
                        <button id="btn-close-prayer-request-not-sent">Ok</button>
                    </div>
                </dialog>
            </section>
            <section id="contribuir">
                <p>Nesta área, você pode contribuir com a <span>ICP Casa do Pai Sorocaba</span>, com os seus <span >dízimos</span> e <span >ofertas</span>, através do Pix <i class="fa-brands fa-pix"></i></p>
                <p>Veja abaixo, o que a palavra de <span>Deus</span>, diz, sobre <span >dízimos</span> e <span >ofertas</span> :</p>
                <div class="content-details">
                    <details open>
                        <summary >Dizimista, a palavra diz:</summary>
                        <p class="bible-book">Tragam todos os seus dízimos aos depósitos do templo, para que haja provisão em minha casa. Se o fizerem”, diz o SENHOR dos Exércitos, “abrirei as janelas do céu para vocês. Derramarei tantas bênçãos que não haverá espaço para guardá-las! Sim, ponham-me à prova!</br>
                            <span>Malaquias 3:10 NVT</span>
                        </p>
                    </details>
                    <details open>
                        <summary >Ofertante, a palavra diz:</summary>
                        <p class="bible-book">Cada um deve decidir em seu coração quanto dar. Não contribuam com relutância ou por obrigação. “Pois Deus ama quem dá com alegria.” Deus é capaz de lhes conceder todo tipo de bênçãos, para que, em todo tempo, vocês tenham tudo de que precisam, e muito mais ainda, para repartir com outros.”</br>
                            <span>2° Coríntios 9:7-8 NVT</span>
                        </p>
                    </details>
                </div>
                <div class="content-qr-code">
                    <div class="content-phone-camera">
                        <img src="assets/images/qr-code/pointing-the-cell-phone-camera.png" class="phone-camera" alt="QR Code Pix" title="Aponte a câmera com leitor de Qr Code do seu Banco">
                    </div>
                    <div>
                        <img src="assets/images/qr-code/qrcode-pix.webp" class="qr-code" alt="QR Code Pix" title="Aponte a câmera com leitor de Qr Code do seu Banco">
                    </div>
                    <div class="tutorial-content">
                        <p>Abra o aplicativo do seu banco <i class="fa-solid fa-building-columns"></i></p>
                        <p>Na <span>Área Pix,</span> escolha a opção <span> Ler QR Code</span></p>
                        <p>Aponte a câmera <i class="fa-solid fa-camera"></i> para o QR Code <i class="fa-solid fa-qrcode"></i></p>
                        <p>Digite o valor que irá contribuír</p>
                        <p>Confirme se a transferência, está sendo realizada para : <span>Evandro Jose Luís Lopes</span></p>
                        <p>Siga os passos do seu aplicativo, para finalizar a contribuição.</p>
                    </div>
                </div>
                <div class="key-pix">
                    <p>Ou copie a <span>Chave Pix : E-mail</span> para utilizar no <span>Internet Banking</span></p>
                    <div>
                        <input type="text" id="key-pix-email" class="key-pix-email" value="ejll@hotmail.com" readonly=“true”>
                        <button class="btn-copy-pix" title="Clique aqui para copiar a chave Pix" onclick="copy()">Copiar
                            <i class="fa-regular fa-copy"></i>
                        </button>
                    </div>
                </div>
            </section>
            <section id="local">
                <h2 class="title"></h2>
                <p class="address">Av. Elias Maluf, 1402 - Wanel Ville, Sorocaba - SP, 18055-215</p>
                <div class="map-buttons">
                    <a class="btn-waze" href="https://ul.waze.com/ul?place=ChIJ7z-djYr1xZQR9p8-9hJ7L9o&ll=-23.49634470%2C-47.50927190&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" target="_blank"><i class="fa-brands fa-waze"></i></a>
                    <a class="btn-maps" href="https://maps.google.com/maps?ll=-23.496345,-47.509272&z=15&t=m&hl=pt-BR&gl=BR&mapclient=embed&cid=15721920145544617974" target="_blank"><i class="fa-solid fa-location-dot"></i></a>
                </div>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14636.960139053444!2d-47.498090850000004!3d-23.4878622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5f58a8d9d3fef%3A0xda2f7b12f63e9ff6!2sICP%20Casa%20do%20Pai%20-%20Sorocaba!5e0!3m2!1spt-BR!2sbr!4v1714057987379!5m2!1spt-BR!2sbr"></iframe>
                </div>
            </section>
            <section id="team">
                <h3 class="section-title-team">Equipe ICP</h3>
                <img class="img-team" src="assets/images/photos-icp/team-icp.jpeg">
            </section>
        </main>
        <footer id="footer">
            <!-- Includes the footer -->
             <?php
                include 'assets/php/include/footer.php';
            ?>
        </footer>

        <!-- import javascript -->
        <script src="assets/js/script.js?v=005"></script>
        <script src="assets/js/dialog-seven-areas-of-full-life.js?v=005"></script>
        <script src="assets/js/dialog-prayer-request.js?v=005"></script>
        <script src="assets/js/contribute.js"></script>
    </body>
</html>
<?php
    $con->close();
?>