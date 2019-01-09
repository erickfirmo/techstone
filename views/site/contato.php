<?php 
section('title', 'TechStone | Desenvolvimento Web');
section('description', 'Contato');
if(!defined('LAYOUT')) return 'site';
?>

<?php partial('site/_title-page'); ?>

<div class="container p-40">
    <h2 class="d-flex justify-content-center">ENTRE EM CONTATO E FAÇA SEU ORÇAMENTO</h2>

    <p class="d-flex justify-content-center p-20">ENTRE EM CONTATO E FAÇA SEU ORÇAMENTO</p>

    <div class="row">
        <div class="col-sm-8 col-md-8 col-sx-8 col-lg-8">
            <form class="contact-form" method="POST" action="#">
                <input type="text" class="form-control" placeholder="Nome" name="nome">
                <br>
                <input type="text" class="form-control" placeholder="Email" name="email">
                <br>
                <input type="text" class="form-control" placeholder="Assunto" name="assunto">
                <br>
                <input type="text" class="form-control" placeholder="Empresa" name="empresa">
                <br>
                <h6>Escolha uma Opção para Entrarmos em Contato</h6>

                <label for="#">Telefone</label>
                <input type="radio" name="opcao-contato">
                <label for="#">Email</label>
                <input type="radio" name="opcao-contato">
                <label for="#">Whatsapp</label>
                <input type="radio" name="opcao-contato">
                <input type="text" class="form-control" placeholder="Whatsapp" name="whatsapp">
                <input type="text" class="form-control" placeholder="Telefone">
                <input type="text" class="form-control" placeholder="Celular">
                <input type="submit" value="ENVIAR">
            </form>
        </div>
        <div class="col-md-4">
            <h5>Informações de Contato</h5>
            <br>
            <h5>Redes Sociais</h5>
        </div>
    </div>
</div>