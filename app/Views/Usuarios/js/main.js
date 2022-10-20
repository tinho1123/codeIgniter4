$(".btn-editar").on("click", function () {
  $.ajax({
    url: "<?= base_url('usuarios/get-dados') ?>" + "/" + $(this).data("id"),
    type: "get",
    beforeSend: function () {},
  })
    .done(function (response) {
      $("#editarUsuario #uuid").val(response[0].id);
      $("#editarUsuario #inputNome").val(response[0].nome);
      $("#editarUsuario #inputEmail").val(response[0].email);
      $("#editarUsuario #selectEmpresas").val(response[0].fk_empresa);
      $("#editarUsuario #selectNivelAcesso").val(response[0].fk_nivel_acesso);
      $("#editarUsuario #checkboxAtivo").prop(
        "checked",
        response[0].ativo == "S" ? true : false
      );
    })
    .fail(function (jqXHR, textStatus, msg) {
      alert(msg);
    });
  $("#editarUsuario").modal("show");
});

$(".btn-excluir").on("click", function () {
  $.ajax({
    url: "<?= base_url('usuarios/delete') ?>" + "/" + $(this).data("id"),
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

$("#btnCriarUsuario").on("click", function () {
  $("#adicionarUsuario").modal("show");
});
