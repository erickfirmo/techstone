<?php 
section('title', 'TechStone | Desenvolvimento Web');
section('description', 'Contato');
if(!defined('LAYOUT')) return 'site';
?>

<?php partial('site/_title-page'); ?>

<?php alert(); ?>

<div class="container pt-2">
    <h2 class="d-flex justify-content-center text-dark mt-3 mb-5">ENTRE EM CONTATO E FAÇA SEU ORÇAMENTO</h2>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-8 col-sx-8 col-lg-8 mb-5">
            <?php partial('site/_form-contato'); ?>
        </div>
        <div id="info-sidebar" class="col-12 col-sm-12 col-md-4 col-sx-4 col-lg-4 mt-3">
            <div class="mb-5">
                <h4 class="text-primary mb-4">Informações de Contato</h4>
                <span class="d-block text-left mb-3">
                <p class="text-dark"><i class="fab fa-whatsapp mr-2"></i></i>+55 (11) 2445 – 5454</p>

                </span>
                <span class="d-block text-left mb-3">
                    <p class="text-dark"><i class="fas fa-phone mr-2"></i></i>+55 (11) 2445 – 5454</p>

                </span>
                <span class="d-block text-left mb-3">
                    
                    <p class="text-dark"><i class="fas fa-envelope mr-2"></i>erickluques@gmail.com</p>
                </span>
            </div>
            <h4 class="text-primary mb-4">Redes Sociais</h4>
            <span>
                <a href="#">
                    <i class="fab fa-facebook mb-4 text-dark"></i>
                </a>
                &nbsp;
                <a href="#">
                    <i class="fab fa-twitter-square mb-4 text-dark"></i>
                </a>                        
                &nbsp;
                <a href="#">
                    <i class="fab fa-instagram mb-4 text-dark"></i>
                </a>
            </span>
        </div>
    </div>
</div>