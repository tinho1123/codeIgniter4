<div class="modal" tabindex="-1" id='editarCliente'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar <?= $titulo ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?= base_url('/clientes/editar') ?>">
          <input type='hidden' name='id' id='uuid' />
          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="inputCpfCnpj" class="form-label">CPF ou CNPJ</label>
            <label type="string" class="form-label" id="labelCpfCnpj"></label>
          </div>

          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="inputNome" class="form-label">nome</label>
            <input type="string" name="nome" class="form-control" id="inputNome" aria-describedby="emailHelp" required>
          </div>

          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" required>
          </div>

          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="inputDataNascimento" class="form-label">Data de nascimento</label>
            <input required type="date" name="data_nascimento" class="form-control" id="inputDataNascimento" aria-describedby="emailHelp">
          </div>

          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="selectSexo" class="form-label">Sexo</label>
            <select name='sexo' id="selectSexo" required>
              <option value='M'>Masculino</option>
              <option value='F'>Feminino</option>
            </select>
          </div>

          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <label for="selectAtivo" class="form-label">Ativo</label>
            <input type='checkbox' name="ativo" id="selectAtivo">
          </div>

          <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
            <div class="form-floating">
              <textarea name='mensagem' class="form-control" placeholder="Deixe uma mensagem aqui" id="textArea" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Adicionar mensagem</label>
            </div>
          </div>

          <div class="d-flex justify-content-center pb-5">
            <button type="submit" class="btn btn-primary">Enviar edição</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>