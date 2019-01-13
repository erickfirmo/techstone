<?php 
section('title', 'TechStone | Desenvolvimento Web');
section('description', 'Home');
if(!defined('LAYOUT')) return 'site';
?>

<?php partial('site/_slider-home'); ?>

<!-- chamada orçamento -->

<div class="container-fluid bg-image-1 solid py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-white">Entre em contanto conosco</h3>
            </div>
            <div class="col-md-3">
                <button class="btn btn-outline-danger btn-lg" href="<?php url('/contato'); ?>">FAÇA SEU ORÇAMENTO</button>
            </div>
        </div>
    </div>
</div>

<!-- produtos / serviços -->
<div class="container mb-4" id="produtos">
    <h2 class="d-flex justify-content-left mt-4 mb-2 text-dark">Produtos</h2>
    <br>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-sx-6 col-lg-4 mb-5">
            <i class="fas fa-laptop-code d-flex justify-content-center mx-auto mb-3"></i>
            <h5 class="text-center text-primary">Criação de Sites</h5>
            <p class="text-center text-dark">Desenvolvemos sites modernos, com layouts adaptáveis a todos os dispositívos e 100% gerenciáveis pelo cliente.</p>      
            <a href="#"><button class="btn btn-danger mx-auto d-block">Saiba Mais</button></a>
        </div>
        <div class="col-sm-12 col-md-6 col-sx-6 col-lg-4 mb-5">
            <i class="fas fa-shopping-cart d-flex justify-content-center mx-auto mb-3"></i>
            <h5 class="text-center text-primary">Lojas Virtuais</h5>
            <p class="text-center text-dark">Estar na internet é fundamental para o seu negócio. Tenha sua Loja Virtual completa, sem mensalidade, com pagamentos via cartão de crédito, integração aos correios, suporte completo e atualizações da plataforma grátis.</p> 
            <a href="#"><button class="btn btn-danger mx-auto d-block">Saiba Mais</button></a>
        </div>
        <div class="col-sm-12 col-md-12 col-sx-12 col-lg-4 mb-5">
            <i class="fas fa-chart-line d-flex justify-content-center mx-auto mb-3"></i>
            <h5 class="text-center text-primary">Google Adwords</h5>
            <p class="text-center  text-dark">Anúncie na internet e apareça nas primeiras páginas do Google, aumentando a demanda de clientes e impulsionando seu negócio.</p>
            <a href="#"><button class="btn btn-danger mx-auto d-block">Saiba Mais</button></a>
        </div>
    </div>
</div>

<!-- Design responsivo -->
<div class="container-fluid pt-4 pb-5 mb-4 bg-primary solid">
    <div class="container">
        <h2 class="d-flex justify-content-left text-white">Design Responsivo</h2>
        <br>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-sx-6 col-lg-6 col-xl-6">
                <p class="text-white">Nullam porta pharetra metus eget cursus. Donec convallis ante vel aliquam fermentum. Nulla quis euismod tortor. Cras maximus libero id risus ornare, ut pharetra mi rhoncus. Cras aliquet dictum urna sit amet dapibus. Nulla suscipit dui cursus, mattis dolor sed, ornare dui. Nunc volutpat enim ut est commodo, at blandit risus varius.</p>  
                <p class="text-white">Maecenas fermentum interdum venenatis. Aenean sollicitudin dui neque. Morbi nec fringilla eros, sed scelerisque elit. Morbi tempus sapien ex, eget volutpat sem facilisis ac. Suspendisse semper sapien nec nisl ultrices, id finibus urna volutpat. Nunc elementum laoreet enim, ut aliquet enim porta ac.</p>
                <p class="text-white">Maecenas fermentum interdum venenatis. Aenean sollicitudin dui neque. Morbi nec fringilla eros, sed scelerisque elit. Morbi tempus sapien ex, eget volutpat sem facilisis ac. Suspendisse semper sapien nec nisl ultrices, id finibus urna volutpat. Nunc elementum laoreet enim, ut aliquet enim porta ac.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-sx-6 col-lg-6 col-xl-6">
                <div id="slider-mini" class="carousel slide" data-ride="carousel" data-interval="1800">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php url('/assets/site/img/slider-mini.jpg'); ?>" alt="Desing Responsivo">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?php url('/assets/site/img/slider-mini.jpg'); ?>" alt="Desing Responsivo">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?php url('/assets/site/img/slider-mini.jpg'); ?>" alt="Desing Responsivo">
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>

<!-- portfolio -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="d-flex justify-content-left mb-2 text-dark">Portfólio</h2>
        </div>
    </div>
</div>
<?php partial('site/_portfolio-grid'); ?>

<!-- logos -->
<br>
<div class="container-fluid bg-light py-4">
    <h2 class="text-center text-dark pb-2">Clientes</h2>
    <div class="row">
        <div class="col-6 col-sm-4 col-md-4 col-sx-2 col-lg-2 col-xl-2">
            <img class="img-fluid" src="<?php url('/assets/site/img/logo-cliente-1.png'); ?>"> 
        </div>
        <div class="col-6 col-sm-4 col-md-4 col-sx-2 col-lg-2 col-xl-2">
            <img class="img-fluid" src="<?php url('/assets/site/img/logo-cliente-1.png'); ?>"> 
        </div>
        <div class="col-6 col-sm-4 col-md-4 col-sx-2 col-lg-2 col-xl-2">
            <img class="img-fluid" src="<?php url('/assets/site/img/logo-cliente-1.png'); ?>"> 
        </div>
        <div class="col-6 col-sm-4 col-md-4 col-sx-2 col-lg-2 col-xl-2">
            <img class="img-fluid" src="<?php url('/assets/site/img/logo-cliente-1.png'); ?>"> 
        </div>
        <div class="col-6 col-sm-4 col-md-4 col-sx-2 col-lg-2 col-xl-2">
            <img class="img-fluid" src="<?php url('/assets/site/img/logo-cliente-1.png'); ?>"> 
        </div>
        <div class="col-6 col-sm-4 col-md-4 col-sx-2 col-lg-2 col-xl-2">
            <img class="img-fluid" src="<?php url('/assets/site/img/logo-cliente-1.png'); ?>"> 
        </div>
    </div>
</div>