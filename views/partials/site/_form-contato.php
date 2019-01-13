<form class="contact-form" method="POST" action="#">
    <input type="text" class="form-control mb-4" placeholder="Nome" name="nome">
    <input type="text" class="form-control mb-4" placeholder="Email" name="email">
    <input type="text" class="form-control mb-4" placeholder="Assunto" name="assunto">
    <input type="text" class="form-control mb-4" placeholder="Empresa" name="empresa">
    <p class="text-primary mt-2 mb-4">Escolha uma Opção para Entrarmos em Contato</p>
    <div class="form-group pl-3">
        <input type="radio" name="opcao-contato" id="radio-whatsapp">
        <span class="text-dark">
            <label for="radio-whatsapp">Whatsapp</label>
        </span>
    </div>
    <div class="form-group pl-3">
        <input type="radio" name="opcao-contato" id="radio-telefone">
        <span class="text-dark">
            <label for="radio-telefone">Telefone</label>
        </span>
    </div>
    <div class="form-group pl-3">
        <input type="radio" name="opcao-contato" id="radio-email">
        <span class="text-dark">
            <label for="radio-email">Email</label>
        </span>
    </div>
    <input type="text" class="form-control mb-4" placeholder="Whatsapp" name="whatsapp">
    <input type="text" class="form-control mb-4" placeholder="Telefone">
    <input type="text" class="form-control mb-4" placeholder="Email">
    <input type="submit" value="ENVIAR" class="btn btn-danger">
</form>