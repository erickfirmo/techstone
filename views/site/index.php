<?php 
section('title', 'TechStone | Desenvolvimento Web');
section('description', 'Home');
if(!defined('LAYOUT')) return 'site';
?>

<?php partial('site/_slider-home'); ?>

<!-- chamada orçamento -->

<div class="container-fluid bg-danger solid p-20">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3>Faça uma simulação</h3>
            </div>
            <div class="col-md-3">
                <button class="btn btn-outline-danger btn-lg" href="#">Faça seu Orçamento</button>
            </div>
        </div>
    </div>
</div>

<!-- produtos / serviços -->
<div class="container mb-4" id="produtos">
    <h2 class="d-flex justify-content-left mt-4 mb-2">Produtos</h2>
    <br>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-sx-6 col-lg-4">
            <i class="fas fa-laptop-code d-flex justify-content-center mx-auto mb-3"></i>
            <h5 class="text-center">Criação de Sites</h5>
            <p class="text-center">Desenvolvemos sites modernos, com layouts adaptáveis a todos os dispositívos e 100% gerenciáveis pelo cliente.</p>      
            <a href="#"><button class="btn btn-danger mx-auto d-block">Ver Detalhes</button></a>
        </div>
        <div class="col-sm-12 col-md-6 col-sx-6 col-lg-4">
            <i class="fas fa-shopping-cart d-flex justify-content-center mx-auto mb-3"></i>
            <h5 class="text-center">Lojas Virtuais</h5>
            <p class="text-center">Estar na internet é fundamental para o seu negócio. Tenha sua Loja Virtual completa, sem mensalidade, com pagamentos via cartão de crédito, integração aos correios, suporte completo e atualizações da plataforma grátis.</p> 
            <a href="#"><button class="btn btn-danger mx-auto d-block">Ver Detalhes</button></a>
        </div>
        <div class="col-sm-12 col-md-12 col-sx-12 col-lg-4">
            <i class="fas fa-chart-line d-flex justify-content-center mx-auto mb-3"></i>
            <h5 class="text-center">Google Adwords</h5>
            <p class="text-center">Anúncie na internet e apareça nas primeiras páginas do Google, aumentando a demanda de clientes e impulsionando seu negócio.</p>
            <a href="#"><button class="btn btn-danger mx-auto d-block">Ver Detalhes</button></a>
        </div>
    </div>
</div>

<!-- Responsividade -->
<div class="container-fluid pt-4 pb-4 mb-4 bg-primary solid">
    <div class="container">
        <h2 class="d-flex justify-content-left">Desenvolvimento Responsivo</h2>
        <br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-sx-6 col-lg-6">
                <p>Nullam porta pharetra metus eget cursus. Donec convallis ante vel aliquam fermentum. Nulla quis euismod tortor. Cras maximus libero id risus ornare, ut pharetra mi rhoncus. Cras aliquet dictum urna sit amet dapibus. Nulla suscipit dui cursus, mattis dolor sed, ornare dui. Nunc volutpat enim ut est commodo, at blandit risus varius.</p>  
                <p>Maecenas fermentum interdum venenatis. Aenean sollicitudin dui neque. Morbi nec fringilla eros, sed scelerisque elit. Morbi tempus sapien ex, eget volutpat sem facilisis ac. Suspendisse semper sapien nec nisl ultrices, id finibus urna volutpat. Nunc elementum laoreet enim, ut aliquet enim porta ac.</p>
                <p>Maecenas fermentum interdum venenatis. Aenean sollicitudin dui neque. Morbi nec fringilla eros, sed scelerisque elit. Morbi tempus sapien ex, eget volutpat sem facilisis ac. Suspendisse semper sapien nec nisl ultrices, id finibus urna volutpat. Nunc elementum laoreet enim, ut aliquet enim porta ac.</p>
            </div>
            <div class="col-sm-12 col-md-6 col-sx-6 col-lg-6">
                <img src="https://ultrawebsite.com.br/responsive-design-img.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- portfolio -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="d-flex justify-content-left mb-2">Portfólio</h2>
        </div>
    </div>
</div>
<?php partial('site/_portfolio-grid'); ?>

<!-- logos -->
<br>
<div class="container-fluid bg-light p-20">
    <div class="row">
        <div class="col-md-2">
            <img class="card-img-top" src="https://mantik.com.br/wp-content/uploads/2018/03/criacao-de-sites-rj-23.png"> 
        </div>
        <div class="col-md-2">
            <img class="card-img-top" src="https://mantik.com.br/wp-content/uploads/2018/03/criacao-de-sites-rj-23.png"> 
        </div>
        <div class="col-md-2">
            <img class="card-img-top" src="https://mantik.com.br/wp-content/uploads/2018/03/criacao-de-sites-rj-23.png"> 
        </div>
        <div class="col-md-2">
            <img class="card-img-top" src="https://mantik.com.br/wp-content/uploads/2018/03/criacao-de-sites-rj-23.png"> 
        </div>
        <div class="col-md-2">
            <img class="card-img-top" src="https://mantik.com.br/wp-content/uploads/2018/03/criacao-de-sites-rj-23.png"> 
        </div>
        <div class="col-md-2">
            <img class="card-img-top" src="https://mantik.com.br/wp-content/uploads/2018/03/criacao-de-sites-rj-23.png"> 
        </div>
    </div>
</div>