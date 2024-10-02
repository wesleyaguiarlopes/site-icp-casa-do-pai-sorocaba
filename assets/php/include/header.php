<?php
    // se não existe sessão ativa
    if(!isset($_SESSION)){
        session_start();
    }

    if(!$_SESSION){
        echo "
            <style>
                #navigation-menu {
                    #admin-button-bar {
                        .btn-admin-logged-in, .btn-admin-logoff {
                            display: none;
                        }
                    }
                }
            </style>
        ";
    }
?>
<div class="container-menu">
    <a class="container-logo" href="/">
        <img class="logo" src="assets/images/logotipo/logo_icp-casa-do-pai.png" alt="Logo da ICP Casa do Pai" title="ICP Casa do Pai Sorocaba">
    </a>
    <nav class="nav-bar">
        <ul>
            <li class="nav-items"><a href="/" title="Voltar para a Página Inicial">início</a></li>
            <li class="nav-items"><a href="/#cultos" title="Ver os dias e horários dos cultos">cultos</a></li>
            <li class="nav-items"><a href="/#nossas-fotos" title="Ver as fotos mais recentes">fotos</a></li>
            <li class="nav-items"><a href="/#pedido-de-oracao" title="Fazer um Pedido de Oração">oração</a></li>
            <li class="nav-items"><a href="/#contribuir" title="Contribuir com seus Dízimos e Ofertas">contribuir</a></li>
            <li class="nav-items"><a href="/#local" title="Ver o Mapa da Igreja">endereço</a></li>
        </ul>
    </nav>
    <div class="social-bar">
        <a class="icon-youtube" href="https://www.youtube.com/@ejll/streams" target="_blank" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
        <a class="icon-instagram" href="https://www.instagram.com/comunhaoplenasorocaba" target="_blank" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a class="icon-facebook" href="https://www.facebook.com/comunhaoplenasorocaba" target="_blank" title="Facebook"><i class="fa-brands fa-square-facebook"></i></a>
        <a class="icon-whatsapp" href="https://api.whatsapp.com/send/?phone=5515996569553&text=Ol%C3%A1,%20a%20paz%20do%20Senhor%20Jesus,%20vim%20pelo%20site!%20Gostaria%20de" target="_blank" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <button class="btn-mobile-menu">
        <i class="fa-solid fa-bars"></i>
    </button>
</div>
<div class="mobile-nav-bar">
    <ul>
        <li class="title-menu border-bottom">◖MENU◗</li>
        <li class="mobile-nav-items border-bottom"><a href="/">Página Inicial</a></li>
        <li class="mobile-nav-items border-bottom"><a href="/#cultos">Nossos Cultos</a></li>
        <li class="mobile-nav-items border-bottom"><a href="/#nossas-fotos">Ver Fotos</a></li>
        <li class="mobile-nav-items border-bottom"><a href="/#pedido-de-oracao">Pedir Oração</a></li>
        <li class="mobile-nav-items border-bottom"><a href="/#contribuir">Dizimar e Ofertar</a></li>
        <li class="mobile-nav-items border-bottom"><a href="/#local">Ver o Mapa</a></li>
    </ul>
</div>
<div id="admin-button-bar">
    <a class="btn-admin-logged-in" href="admin" title="Ir para o gerenciamento do site">Acessar Admin</a>
    <a class="btn-admin-logoff" href="assets/php/logoff" title="Sair do Acesso ao gerenciamento do site">Sair do Admin</a>
</div>