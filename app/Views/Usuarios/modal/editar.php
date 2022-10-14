<div class="modal" tabindex="-1" id='editarUsuario'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar <?= $titulo ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?= base_url('/usuarios/editar') ?>">
          <input type='hidden' name='id' id='uuid' />
          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="string" name="nome" class="form-control" id="inputNome" required>
          </div>
          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="inputEmail" class="form-label">Email</label>
            <input required type="string" name="email" class="form-control" id="inputEmail">
          </div>


          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="selectEmpresas" class="form-label">Empresas</label>
            <select class='form-select' name="empresa" id='selectEmpresas'>
              <?php foreach ($empresas as $empresa) :  ?>
                <option value="<?= $empresa['id'] ?>"><?= $empresa['razao_social'] ?></option>
              <?php endforeach ?>
            </select>
          </div>

          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="selectNivelAcesso" class="form-label">Niveis de Acessos</label>
            <select class='form-select' id="selectNivelAcesso" name='nivel_acesso'>
              <?php foreach ($niveis_acessos as $nivel_acesso) :  ?>
                <option value="<?= $nivel_acesso['id'] ?>"><?= $nivel_acesso['nivel_acesso'] ?></option>
              <?php endforeach ?>
            </select>
          </div>

          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="checkboxAtivo" class="form-label">Ativo</label>
            <input type='checkbox' name="ativo" id="checkboxAtivo">
          </div>

          <div class="d-flex justify-content-center pb-5">
            <button type="submit" class="btn btn-primary">Enviar edição</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>