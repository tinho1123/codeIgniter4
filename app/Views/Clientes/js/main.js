$(".btn-editar").on("click", function () {
  $.ajax({
    url: "<?= base_url('clientes/get-dados') ?>" + "/" + $(this).data("id"),
    type: "get",
    beforeSend: function () {},
  })
    .done(function (response) {
      $("#editarCliente #uuid").val(response[0].id);
      $("#editarCliente #labelCpfCnpj").text(response[0].cpf_cnpj);
      $("#editarCliente #inputNome").val(response[0].nome);
      $("#editarCliente #inputEmail").val(response[0].email);
      $("#editarCliente #inputDataNascimento").val(response[0].data_nascimento);
      $("#editarCliente #selectSexo").val(response[0].sexo);
      $("#editarCliente #textArea").val(response[0].mensagem);

      $("#editarCliente #selectAtivo").prop(
        "checked",
        response[0].ativo == "S" ? true : false
      );
    })
    .fail(function (jqXHR, textStatus, msg) {
      alert(msg);
    });
  $("#editarCliente").modal("show");
});

$(".btn-excluir").on("click", function () {
  $.ajax({
    url: "<?= base_url('clientes/delete') ?>" + "/" + $(this).data("id"),
    type: "delete",
    beforeSend: function () {},
  })
    .done(function (response) {
      location.reload();
    })
    .fail(function (jqXHR, textStatus, msg) {
      alert(msg);
    });
});

$("#btnCriarClientes").on("click", function () {
  $("#adicionarCliente").modal("show");
});
