<div class="modal" tabindex="-1" id='adicionarEmpresa'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Criar <?= $titulo ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?= base_url('empresas/criar') ?>">
          <!- Criar Empresa ->
            <div class="mb-3">
              <label for="inputRazaoSocial" class="form-label">Razão Social</label>
              <input type="string" class="form-control" id="inputRazaoSocial" aria-describedby="razaoSocialHelp" name='razao_social' required>
              <div id="razaoSocialHelp" class="form-text">Nome de sua empresa</div>
            </div>
            <div class="mb-3">
              <label for="inputFundacao" class="form-label">Fundação</label>
              <input type="date" required class="form-control" id="inputFundacao" aria-describedby="fundacaoHelp" name='fundacao'>
              <div id="fundacaoHelp" class="form-text">Data de abertura de sua empresa'</div>
            </div>
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Endereço de Email</label>
              <input type="email" required class="form-control" id="inputEmail" aria-describedby="emailHelp" name='email'>
              <div id="emailHelp" class="form-text">Nunca compartilhe seu email com ninguém!</div>
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Senha</label>
              <input type="password" required class="form-control" id="inputPassword" name='senha' aria-describedby="passwordHelp">
              <div class='form-text' id='passwordHelp'>Numca compartilhe sua senha com ninguém!</div>
            </div>

            <!- Criar endereço ->
              <div class="mb-3">
                <label for="inputCep" class="form-label">CEP</label>
                <input type="string" required class="form-control" id="inputCep" name='cep' aria-describedby="cepHelp">
              </div>
              <div class="mb-3">
                <label for="inputLogradouro" class="form-label">Logradouro</label>
                <input type="string" class="form-control" id="inputLogradouro" aria-describedby="logradouroHelp" name='logradouro' required>
              </div>
              <div class="mb-3">
                <label for="inputNumero" class="form-label">Número</label>
                <input type="string" required class="form-control" id="inputNumero" aria-describedby="numeroHelp" name='numero'>
              </div>
              <div class="mb-3">
                <label for="inputBairro" class="form-label">Bairro</label>
                <input type="string" required class="form-control" id="inputBairro" aria-describedby="bairroHelp" name='bairro'>
              </div>
              <div class="mb-3">
                <label for="inputCidade" class="form-label">Cidade</label>
                <input type="string" required class="form-control" id="inputCidade" name='cidade' aria-describedby="cidadeHelp">
              </div>
              <div class="mb-3">
                <label for="inputCidade" class="form-label">UF</label>
                <select class="form-select" aria-label="Default select example" name='uf' required>
                  <option value="">Lista de estados</option>
                  <?php foreach ($estados as $estado) : ?>
                    <option value="<?= $estado['uf'] ?>"><?= $estado['nome'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1"><a href="#">Termo de condições</a></label>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Adicionar Empresa</button>
      </div>
    </div>
    </form>

  </div>
</div>
</div>