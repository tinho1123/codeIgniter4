<div class="d-flex justify-content-center">
    <div>
        <h2 class="text-center"><?= $titulo ?></h2>
        <div class="d-flex justify-content-center mb-3 gap-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adicionarCliente">Adicionar</button>
            <a type="button" class="btn btn-secondary" href="<?= base_url('home') ?>">Home</a>
        </div>
    </div>
</div>

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th>CPF ou CNPJ</th>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>Email</th>
            <th>Sexo</th>
            <th>Mensagem</th>
            <th>Ativo</th>
            <th>Data de criação</th>
            <th colspan='2'>Ações</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($clientes as $cliente) : ?>
            <tr>
                <td><?= $cliente['cpf_cnpj'] ?></td>
                <td><?= $cliente['nome'] ?></td>
                <td><?= $cliente['data_nascimento'] ?></td>
                <td><?= $cliente['email'] ?></td>
                <td><?= $cliente['sexo'] ?></td>
                <td><?= $cliente['mensagem'] ?></td>
                <td><?= $cliente['ativo'] ?></td>
                <td><?= $cliente['data_criacao'] ?></td>
                <td>
                    <button class="btn-editar btn btn-warning" data-id="<?= $cliente['id'] ?>">Editar</button>
                </td>
                <td>


                    <button class="btn-excluir btn btn-danger" data-id="<?= $cliente['id'] ?>">Excluir</button>

                </td>
            </tr>
        <?php endforeach ?>

    </tbody>
</table>