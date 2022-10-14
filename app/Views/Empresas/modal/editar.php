<div class="modal" tabindex="-1" id='editarEmpresa'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar <?= $titulo ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?= base_url('/empresas/editar') ?>">
          <input type='hidden' name='id' id='uuid' />
          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="inputRazaoSocial" class="form-label">Razão Social</label>
            <input type="string" name="razao_social" class="form-control" id="inputRazaoSocial" required>
          </div>
          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="inputFundacao" class="form-label">Fundação</label>
            <input type="date" name="fundacao" class="form-control" id="inputFundacao" required>
          </div>

          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="inputEmail" class="form-label">Email</label>
            <input required type="string" name="email" class="form-control" id="inputEmail">
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