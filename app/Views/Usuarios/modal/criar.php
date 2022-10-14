<div class="modal" tabindex="-1" id='adicionarUsuario'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Criar <?= $titulo ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?= base_url('usuarios/criar') ?>">
          <!- Criar Usuarios ->
            <div class="mb-3">
              <label for="inputRazaoSocial" class="form-label">Nome</label>
              <input type="string" class="form-control" id="inputRazaoSocial" aria-describedby="razaoSocialHelp" name='nome' required>
              <div id="razaoSocialHelp" class="form-text">Nome do seu usuario</div>
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

            <div class="mb-3">
              <label for="inputEmpresa" class="form-label">Empresa</label>
              <select class="form-select" name='empresa' required>
                <option value=''>Escolha a empresa</option>
                <?php foreach ($empresas as $empresa) : ?>
                  <option value="<?= $empresa['id'] ?>"><?= $empresa['razao_social'] ?></option>
                <?php endforeach ?>
              </select>
              <div class="form-text">Necessário vincular o usuário a uma empresa</div>
            </div>

            <div class="mb-3">
              <label for="inputEmpresa" class="form-label">Empresa</label>
              <select class="form-select" name='nivel_acesso' required>
                <option value=''>Escolha o nivel de acesso</option>
                <?php foreach ($niveis_acessos as $nivel_acesso) : ?>
                  <option value="<?= $nivel_acesso['id'] ?>"><?= $nivel_acesso['nivel_acesso'] ?></option>
                <?php endforeach ?>
              </select>
              <div class="form-text">Necessário colocar o nivel de acesso ao usuário</div>
            </div>


            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
              <label class="form-check-label" for="exampleCheck1"><a href="#">Termos de condições</a></label>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Adicionar Usuario</button>
      </div>
    </div>
    </form>

  </div>
</div>
</div>