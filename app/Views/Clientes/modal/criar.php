<div class="modal" tabindex="-1" id='adicionarCliente'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Criar <?= $titulo ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?= base_url('clientes/criar') ?>">
          <div class="mb-3">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="string" class="form-control" id="inputNome" aria-describedby="nomeHelp" name='nome' required>
            <div id="nomeHelp" class="form-text">Seu nome</div>
          </div>
          <div class="mb-3">
            <label for="inputCpfCnpj" class="form-label">CPF ou CNPJ</label>
            <input type="string" required class="form-control" id="inputCpfCnpj" aria-describedby="cpfCnpjHelp" name='cpf_cnpj'>
            <div id="cpfCnpjHelp" class="form-text">Seu CPF ou CNPJ'</div>
          </div>

          <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="string" required class="form-control" id="inputEmail" aria-describedby="emailHelp" name='email'>
            <div id="emailHelp" class="form-text">Email</div>
          </div>
          <div class="mb-3">
            <label for="inputDataNascimento" class="form-label">Data de Nascimento</label>
            <input type="date" required class="form-control" id="inputDataNascimento" aria-describedby="dataNascimentoHelp" name='data_nascimento'>
            <div id="dataNascimentoHelp" class="form-text">Nunca compartilhe seu email com ninguém!</div>
          </div>
          <div class="mb-3">
            <label for="selectSexo" class="form-label">Sexo</label>
            <select name="sexo" required id="selectSexo" class="form-select">
              <option value="">Escolha seu sexo</option>
              <option value="M">Masculino</option>
              <option value="F">Feminino</option>
            </select>
            <div class='form-text' id='passwordHelp'>Numca compartilhe sua senha com ninguém!</div>
          </div>

          <div class="mb-3">
            <div class="form-floating">
              <textarea name='mensagem' class="form-control" placeholder="Deixe uma mensagem aqui" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Adicionar mensagem</label>
            </div>
          </div>


          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1"><a href="#">Termo de condições</a></label>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Adicionar Cliente</button>
          </div>
      </div>
      </form>

    </div>
  </div>
</div>