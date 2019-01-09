<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php url('/'); ?>">
            LOGO
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-right" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php url('/'); ?>">Home</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="<?php url('/sobre'); ?>">Sobre</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Produtos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php url('/criacao_de_sites'); ?>">Criação de Sites</a>
                    <a class="dropdown-item" href="<?php url('/lojas_virtuais'); ?>">Lojas Virtuais</a>
                    <a class="dropdown-item" href="<?php url('/adwords'); ?>">Adwords</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php url('/#produtos'); ?>">Todos</a>
                    </div>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="<?php url('/portfolio'); ?>">Portfólio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php url('/contato'); ?>">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>