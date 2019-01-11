<header id="header">
    <nav id="main-navigation" class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php url('/'); ?>">
                <img src="<?php url('/assets/site/img/logo.png'); ?>" alt="logo" id="logo">
            </a>
            <button id="nav-button" class="navbar-toggler navbar-toggler-right button-toggler-menu" type="button" data-toggle="collapse"  data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarText" class="navbar-collapse collapse background-menu">
                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link item-menu<?php classActiveUrl('/'); ?>" href="<?php url('/'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link item-menu<?php classActiveUrl('/sobre'); ?>" href="<?php url('/sobre'); ?>">Sobre</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle item-menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produtos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item item-menu<?php classActiveUrl('/criacao_de_sites'); ?>" href="<?php url('/criacao_de_sites'); ?>">Criação de Sites</a>
                        <a class="dropdown-item item-menu<?php classActiveUrl('/lojas_virtuais'); ?>" href="<?php url('/lojas_virtuais'); ?>">Lojas Virtuais</a>
                        <a class="dropdown-item item-menu<?php classActiveUrl('/adwords'); ?>" href="<?php url('/adwords'); ?>">Adwords</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link item-menu<?php classActiveUrl('/portfolio'); ?>" href="<?php url('/portfolio'); ?>">Portfólio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link item-menu<?php classActiveUrl('/contato'); ?>" href="<?php url('/contato'); ?>">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>