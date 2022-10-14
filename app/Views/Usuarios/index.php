<div class="d-flex justify-content-center">
  <div>
    <h2 class="text-center"><?= $titulo ?></h2>
    <div class="d-flex justify-content-center mb-3 gap-3">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adicionarUsuario">Adicionar</button>
      <a type="button" class="btn btn-secondary" href="<?= base_url('home') ?>">Home</a>
    </div>
  </div>
</div>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Ativo</th>
      <th>Data de Criação</th>
      <th>empresa</th>
      <th>Nivel de Acesso</th>
      <th colspan="2">Ações</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($usuarios as $usuario) : ?>
      <tr>
        <td><?= $usuario['nome'] ?></td>
        <td><?= $usuario['email'] ?></td>
        <td><?= $usuario['ativo'] ?></td>
        <td><?= $usuario['data_criacao'] ?></td>
        <td><?= $usuario['razao_social'] ?></td>
        <td><?= $usuario['nivel_acesso'] ?></td>
        <td><button class="btn-editar btn btn-warning" data-id="<?= $usuario['id'] ?>">Editar</button></td>
        <td><button class="btn-excluir btn btn-danger" data-id="<?= $usuario['id'] ?>">Excluir</button></td>

      </tr>
    <?php endforeach ?>

  </tbody>
</table>