<div class="d-flex justify-content-center">
  <div>
    <h2 class="text-center"><?= $titulo ?></h2>
    <div class="d-flex justify-content-center mb-3 gap-3">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adicionarEmpresa">Adicionar</button>
      <a type="button" class="btn btn-secondary" href="<?= base_url('home') ?>">Home</a>
    </div>
  </div>
</div>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th>Razão Social</th>
      <th>Fundação</th>
      <th>email</th>
      <th>ativo</th>
      <th>data de Abertura</th>
      <th colspan="2">AÇÕES</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($empresas as $empresa) : ?>
      <tr>
        <td><?= $empresa['razao_social'] ?></td>
        <td><?= $empresa['fundacao'] ?></td>
        <td><?= $empresa['email'] ?></td>
        <td><?= $empresa['ativo'] ?></td>
        <td><?= $empresa['data_abertura'] ?></td>
        <td><button class="btn-editar btn btn-warning" data-id="<?= $empresa["id"] ?>"> Editar</button></td>
        <td><button class="btn-excluir btn btn-danger" data-id="<?= $empresa["id"] ?>"> Excluir</button></td>
      </tr>
    <?php endforeach ?>

  </tbody>
</table>